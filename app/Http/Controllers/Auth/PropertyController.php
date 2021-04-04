<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

use App\Models\PropertyDetail;

class PropertyController extends Controller
{
    private $n;
    public function initialpage(){
        return view('noofproperty');
    }
    
    public function getthenumber(Request $request){
        $no = $request -> no;
        $this->n = $no;
        return view('property',compact('no'));
        
    }
    
    public function getthedetails(Request $request,$no){
        for ($i=1; $i <= $no; $i++) { 
            $property = new PropertyDetail();
         $PID = Auth::user()->username.(string)$i;
            $property -> PID = $PID;
            $property -> address = $request -> $PID;
            $property -> username = Auth::user()-> username;
            $property -> save();
            
        }
        $n1 = "You Have successfully setup for landlord controls";
        return redirect('/dashboard');
    }
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
}
