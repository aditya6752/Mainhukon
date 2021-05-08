<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\PropertyDetail;
use App\Models\Tenant;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {

        return view('admin.dashboard');
    }
    public function contactus()
    {

        return view('admin.contactus');
    }
    public function editadmin($id)
    {
        $usr = User::where('id', $id)->first();
        return view('admin.editadmin',compact('usr'));
    }
    public function storeadmins($id,Request $request){
        $user = User::where('id', $id)->first();
        if ($request['password']) {
            $request['password'] = Hash::make($request->password);
        } else {
            $request['password'] = $user->password;
        }
        $user->update($request->all());
        $name = $user->username;
        return redirect('/admin/manageadmin')->with('status','Details of '.$name.' is updated');
    }
    public function deleteadmin($id){
        $user = User::where('id', $id)->first();
        $name = $user->username;
        $user->delete();
        PropertyDetail::where('username',$name)->delete();
        Tenant::where('tenant_username',$name)->delete();
        Tenant::where('landlord_username',$name)->delete();
        return redirect('/admin/manageadmin')->with('status',$name.' is Deleted');
    }
    
    public function editproperty($id)
    {
        $property = PropertyDetail::where('id',$id)->first();
        return view('admin.editproperty',compact('property'));
    }
    public function storeproperty(Request $request,$id){
        $property = PropertyDetail::where('id',$id) -> first();
        $property->update($request->all());
        return redirect('/admin/seepropertydetails/'.$property->username.'');
    }
    public function deleteproperty($id){
        $property = PropertyDetail::where('id',$id);
        $name = $property->first()->username;
        $property->delete();
        return redirect('/admin/seepropertydetails/'.$name.'');
    }
    public function edittenantreview($id)
    {
        $tenant = Tenant::where('id', $id)->first();
        return view('admin.edittenantreview',compact('tenant'));
    }
    public function deletereview($id){
        $property = Tenant::where('id',$id);
        $name = $property->first()->tenant_username;
        $property->delete();
        return redirect('/admin/seetenantreview/'.$name.'');
    }
    public function storetenant(Request $request,$id){
        $property = Tenant::where('id',$id) -> first();
        $property->update($request->all());
        return redirect('/admin/seetenantreview/'.$property->tenant_username.'');
    }
    public function edituser($id)
    {
        $usr = User::where('id', $id)->first();
        return view('admin.edituser',compact('usr'));
    }
    public function storeusers($id,Request $request){
        $user = User::where('id', $id)->first();
        if ($request['password']) {
            $request['password'] = Hash::make($request->password);
        } else {
            $request['password'] = $user->password;
        }
        
        $user->update($request->all());
        $name = $user->username;
        return redirect('/admin/manageuser')->with('status','Details of '.$name.' is updated');
    }
    public function deleteuser($id){
        $user = User::where('id', $id)->first();
        $name = $user->username;
        $user->delete();
        PropertyDetail::where('username',$name)->delete();
        Tenant::where('tenant_username',$name)->delete();
        Tenant::where('landlord_username',$name)->delete();
        return redirect('/admin/manageuser')->with('status',$name.' is Deleted');
    }
    public function resetuser($id){
        $user = User::where('id', $id) -> first();
        $name = $user ->username;
        PropertyDetail::where('username',$name)->delete();
        Tenant::where('tenant_username',$name)->delete();
        Tenant::where('landlord_username',$name)->delete();
        return redirect('/admin/manageuser')->with('status','Details of '.$name.' is Deleted');
    }
    
    public function manageadmin()
    {
        $user = User::where('user_type','admin')->get();
        return view('admin.manageadmin',compact('user'));
    }
    public function manageproperty()
    {
        $user = User::all();
        return view('admin.manageproperty',compact('user'));
    }
    public function managetenant()
    {
        $user = User::all();
        return view('admin.managetenant',compact('user'));
    }
    public function manageuser()
    {
        $user = User::all();
        return view('admin.manageuser',compact('user'));
    }
    public function seepropertydetails($username)
    {
        $property = PropertyDetail::where('username',$username)->get();
        $username = $username;
        return view('admin.seepropertydetails',compact('property','username'));
    }
    public function seetenantreview($username)
    {
        $tenant = Tenant::where('tenant_username',$username)->get();
        $username = $username;
        return view('admin.seetenantreview',compact('tenant','username'));
    }
    public function adminregister()
    {

        return view('admin.adminregister');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'user_type' => 'admin', 
        ]));

        event(new Registered($user));

        return redirect('/admin/dashboard');
    }
}
