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
Route::get('/admin/editadmin/{id}',[AdminController::class, 'editadmin']);
Route::get('/admin/editproperty/{id}',[AdminController::class, 'editproperty']);
Route::get('/admin/edittenantreview/{id}',[AdminController::class, 'edittenantreview']);
Route::get('/admin/edituser/{id}',[AdminController::class, 'edituser']);
Route::get('/admin/manageadmin',[AdminController::class, 'manageadmin']);
Route::get('/admin/manageproperty',[AdminController::class, 'manageproperty']);
Route::get('/admin/managetenant',[AdminController::class, 'managetenant']);
Route::get('/admin/manageuser',[AdminController::class, 'manageuser']);
Route::get('/admin/seepropertydetails/{username}',[AdminController::class, 'seepropertydetails']);
Route::get('/admin/seetenantreview/{username}',[AdminController::class, 'seetenantreview']);
Route::get('/admin/deleteuser/{id}',[AdminController::class, 'deleteuser']);
Route::get('/admin/resetuser/{id}',[AdminController::class, 'resetuser']);
Route::post('/admin/storeusers/{id}', [AdminController::class,'storeusers']);
Route::get('/admin/deleteadmin/{id}',[AdminController::class, 'deleteadmin']);
Route::post('/admin/storeadmins/{id}', [AdminController::class,'storeadmins']);
Route::post('/admin/storeproperty/{id}', [AdminController::class,'storeproperty']);
Route::post('/admin/storetenant/{id}', [AdminController::class,'storetenant']);
Route::get('/admin/deleteproperty/{id}',[AdminController::class, 'deleteproperty']);
Route::get('/admin/deletereview/{id}',[AdminController::class, 'deletereview']);
?>