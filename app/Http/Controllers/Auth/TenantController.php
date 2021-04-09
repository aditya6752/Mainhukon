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
      $tenant = new Tenant();
      $user = User::where('email',$request->email)->first();
      $tenant -> tenant_username = $user->username;
      $tenant -> landlord_username  = Auth::user()->username;
      $tenant -> start_date = $request -> start_date;
      $tenant -> PID = $pid;
      $tenant ->save();
      return redirect('/myproperties');
    }
    public function tenant(){
      $tenant = Tenant::where('tenant_username',Auth::user()->username)->get();
      return view('tenantmainpage',compact('tenant'));
    }
}
