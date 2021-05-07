<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
    public function editadmin()
    {

        return view('admin.editadmin');
    }
    public function editproperty()
    {

        return view('admin.editproperty');
    }
    public function edittenantreview()
    {

        return view('admin.edittenantreview');
    }
    public function edituser()
    {

        return view('admin.edituser');
    }
    public function manageadmin()
    {

        return view('admin.manageadmin');
    }
    public function manageproperty()
    {

        return view('admin.manageproperty');
    }
    public function managetenant()
    {

        return view('admin.managetenant');
    }
    public function manageuser()
    {

        return view('admin.manageuser');
    }
    public function seepropertydetails()
    {

        return view('admin.seepropertydetails');
    }
    public function seetenantreview()
    {

        return view('admin.seetenantreview');
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
