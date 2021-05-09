<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

use App\Models\PropertyDetail;
use App\Models\Pincodes;

class PropertyController extends Controller
{
    
    public function dashboard(){
        $property = PropertyDetail::where('username', Auth::user()->username) -> get();
        $property =  $property->isEmpty();
        if ($property) {
            $property = 0;
        }
        else{
            $property = 1;
        }
        
            return view('dashboard',compact('property'));
        
    }
    public function landlordlanding(){
        $properties = PropertyDetail::where('username', Auth::user()->username) -> get();
        $i = 1;
        foreach ($properties as $property) {
            $i=$i+1;
        }
        $properties = PropertyDetail::where('username', Auth::user()->username) -> get();
        
        return view('myproperties',compact('properties','i'));
    }
    public function editpropertydetails($PID){
        $property = PropertyDetail::where('PID', $PID) -> first();
        return view('editproperty',compact('property'));
    }
    public function updatepropertydetails(Request $request,$id){
        $property = PropertyDetail::where('id',$id)->first();
        $property -> address = $request->address;
        $property->save();
        return redirect('/myproperties');
    }
    public function addproperty(){
        
        return view('addproperty');
    }
    public function addthedetails(Request $request){
        $pin = $request -> pin;
        $pinf = Pincodes::where('pin',$pin)->get();
        if ($pinf->isEmpty()){
            $PID = $pin."_1";
            $pinn = new Pincodes();
            $pinn -> pin = $pin;
            $pinn -> no = '1';
            $pinn -> save();
        }
        else{
            $pinf = Pincodes::where('pin',$pin)->first();
            $no = $pinf->no;
            $PID = $pin."_".($no+1);
            $pinf -> no = $no + 1 ;
            $pinf -> save();
        }
        $property = new PropertyDetail();
        
        $property -> PID = $PID;
        $property -> address = $request -> address;
        $property -> username = Auth::user()-> username;
        $property -> save();
        $n1 = "You Have successfully setup for landlord controls";
        return redirect('/myproperties');
    }
    public function transfer($id){
        $nid = $id;
        $n1 = 0;
        return view("transfer",compact('nid','n1'));
    }
    public function transferproperty(Request $request,$id){
        $property = PropertyDetail::where('PID',$id)->first();
        $email = $request-> email;
        $user = User::where('email',$email) -> get();
        if ($user->isEmpty()) {
            $n1 = 1;
            $nid = $id;
            $message = "The email id you entered is not registered on this site";
            return view("transfer", compact('message','nid','n1'));
        }else{
            $user1 = Users::where('email',$email) -> first();
            $property-> username = $user1->username;
            $property->save();
        return redirect('/myproperties');}
    }
    
    
}
