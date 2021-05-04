<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PropertyController;
use App\Http\Controllers\Auth\TenantController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin/dashboard',[AdminController::class, 'dashboard']);
Route::get('/admin/contactus',[AdminController::class, 'contactus']);
Route::get('/admin/editadmin',[AdminController::class, 'editadmin']);
Route::get('/admin/editproperty',[AdminController::class, 'editproperty']);
Route::get('/admin/edittenantreview',[AdminController::class, 'edittenantreview']);
Route::get('/admin/edituser',[AdminController::class, 'edituser']);
Route::get('/admin/manageadmin',[AdminController::class, 'manageadmin']);
Route::get('/admin/manageproperty',[AdminController::class, 'manageproperty']);
Route::get('/admin/managetenant',[AdminController::class, 'managetenant']);
Route::get('/admin/manageuser',[AdminController::class, 'manageuser']);
Route::get('/admin/seepropertydetails',[AdminController::class, 'seepropertydetails']);
Route::get('/admin/seetenantreview',[AdminController::class, 'seetenantreview']);
?>