<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

use App\Models\PropertyDetail;
use App\Models\Pincodes;
use App\Models\Tenant;
use App\Mail\TenantMail;
use Illuminate\Support\Facades\Mail;

class TenantController extends Controller
{
    public function landingpage($pid){
      $PID = $pid;
      $tenant = Tenant::where('PID',$pid)->get();
      return view('landlordmainpage',compact('PID','tenant'));
    }
    public function addtenant($pid){
      $PID = $pid;
      return view('starttenant',compact('PID'));
    }
    public function endtenant($pid){
      $tenant = Tenant::where('id',$pid)->first();
      $user = User::where('username',$tenant->tenant_username)->first();
      $PID = $tenant->PID;
      return view('endtenant',compact('PID','tenant','user','pid'));
    }
    public function storereview(Request $request,$id){
      $tenant = Tenant::where('id',$id)->first();
      $tenant -> Review = $request -> review;
      $tenant -> end_date = $request -> date;
      $tenant -> save();
      return redirect('/myproperties');
    }
    public function storetenant(Request $request,$pid){
      $user = User::where('email',$request->email);
      if ( Auth::user()-> email == $request->email ) {
        $PID = $pid;
        $n1 = "You cannot use this email address";
        return redirect('/addtenant/'.$PID)->with('n1',$n1);
      }elseif ($user->get()->isEmpty()) {
          $PID = $pid;
          $n1 = "This email Id is not registered";
        return redirect('/addtenant/'.$PID)->with('n1',$n1);
        
      } 
      else {
        
        $Property = PropertyDetail::where('PID',$pid);
        $landlorddetails = [
          'name' => Auth::user()->name,
          'address' => $Property->first()->address,
          'username' => Auth::user()->username,
          'PID' => $pid,
          'start_date' => $request-> start_date,
        ];
        Mail::to($request->email)->send(new TenantMail($landlorddetails));
        return redirect('/property/'.$pid)->with('status','After your tenant confirms their name will be displayed here');  
      }
    }
    public function savetenantdetail($landlord_username,$pid,$d,$m,$y){
        $start_date = $d.'/'.$m.'/'.$y;
        $tenant_confirmation = Tenant::where('PID',$pid);
        if($tenant_confirmation->first()->tenant_username == Auth::user()->username){
          return redirect("/tenantpage");
        }elseif($landlord_username == Auth::user()->username){
          return redirect("/dashboard")->with('status','Your are not Authorised to do this');
        }
        else{
        $tenant = new Tenant();
        $tenant -> tenant_username = Auth::User()->username;
        $tenant -> landlord_username  = $landlord_username;
        $tenant -> start_date = $start_date;
        $tenant -> PID = $pid;
        $tenant ->save();
        return redirect("/tenantpage");}
    }
    public function savetenantdetails($landlord_username,$pid,$start_date){
      $tenant_confirmation = Tenant::where('PID',$pid);
      if($tenant_confirmation->first()->tenant_username == Auth::user()->username){
        return redirect("/tenantpage");
      }elseif($landlord_username == Auth::user()->username){
        return redirect("/dashboard")->with('status','Your are not Authorised for this');
      }
      else{
      $tenant = new Tenant();
      $tenant -> tenant_username = Auth::User()->username;
      $tenant -> landlord_username  = $landlord_username;
      $tenant -> start_date = $start_date;
      $tenant -> PID = $pid;
      $tenant ->save();
      return redirect("/tenantpage");}
  }
    
    public function confirmation(){
      $landlorddetails = [
        'name' => 'Auth::user()->name',
        'address' => '$Property->first()->address',
        'username' => 'Auth::user()->username',
        'PID' => 'pid',
        'start_date' => 'request-> start_date',
      ];
      
      return new TenantMail($landlorddetails);
    }
    public function tenant(){
      $tenant = Tenant::where('tenant_username',Auth::user()->username)->get();
      return view('tenantmainpage',compact('tenant'));
    }
}
