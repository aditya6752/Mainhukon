<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        
        return view('admin.dashboard');
    } 
    public function conatactus(){
        
        return view('admin.contactus');
    } 
    public function editadmin(){
        
        return view('admin.editadmin');
    } 
    public function editproperty(){
        
        return view('admin.editproperty');
    } 
    public function edittenantreview(){
        
        return view('admin.edittenantreview');
    } 
    public function edituser(){
        
        return view('admin.edituser');
    } 
    public function manageadmin(){
        
        return view('admin.manageadmin');
    } 
    public function manageproperty(){
        
        return view('admin.manageproperty');
    } 
    public function managetenant(){
        
        return view('admin.managetenant');
    } 
    public function manageuser(){
        
        return view('admin.manageuser');
    } 
    public function seepropertydetails(){
        
        return view('admin.seepropertydetails');
    } 
    public function seetenantreview(){
        
        return view('admin.seetenantreview');
    } 
}
