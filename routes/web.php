<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PropertyController;

use App\Http\Controllers\Auth\TenantController;
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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/csstesting', function () {
    return view('twcss');
});
Route::get('/landlord', function () {
    return view('landlord');
});
Route::get('/property',[PropertyController::class, 'getthenumber'])->middleware(['auth'])->name('post.getnumber');
Route::get('/dashboard',[PropertyController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/myproperties',[PropertyController::class, 'landlordlanding'])->middleware(['auth'])->name('landlord.dashboard');
Route::get('/editpropertydetail/{PID}',[PropertyController::class, 'editpropertydetails'])->middleware(['auth'])->name('landlord.editproperty');
Route::post('/update/{id}',[PropertyController::class, 'updatepropertydetails'])->middleware(['auth'])->name('landlord.updateproperty');
Route::get('/addproperty',[PropertyController::class, 'addproperty'])->middleware(['auth'])->name('landlord.editproperty');
Route::post('/addpropertydetails',[PropertyController::class, 'addthedetails'])->middleware(['auth'])->name('landlord.editproperty');
Route::get('/transfer/{id}',[PropertyController::class, 'transfer'])->middleware(['auth'])->name('landlord.transferproperty');
Route::post('/transferproperty/{id}',[PropertyController::class, 'transferproperty'])->middleware(['auth'])->name('landlord.transfered');
Route::get('/property/{pid}',[TenantController::class, 'landingpage'])->middleware(['auth'])->name('landlord.tenantdetails');
Route::get('/addtenant/{pid}',[TenantController::class, 'addtenant'])->middleware(['auth'])->name('landlord.addingdetail');
Route::get('/endtenant/{pid}',[TenantController::class, 'endtenant'])->middleware(['auth'])->name('landlord.reviewingtenant');
Route::post('/addtenantdetail/{id}',[TenantController::class, 'storetenant'])->middleware(['auth'])->name('landlord.storingnewtenantdetail');
Route::post('/reviewtenant/{id}',[TenantController::class, 'storereview'])->middleware(['auth'])->name('landlord.tenantsreview');
Route::get('/tenantpage',[TenantController::class, 'tenant'])->middleware(['auth'])->name('landlord.editproperty');

require __DIR__.'/auth.php';


Route::group( ['middleware'=> ['auth','admin'] ],function () {
    require __DIR__.'/admin-panel.php';
});