<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PropertyController;
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

Route::get('/noofproperty',[PropertyController::class, 'initialpage'])->middleware(['auth'])->name('post.setup');


Route::post('/property',[PropertyController::class, 'getthenumber'])->middleware(['auth'])->name('post.getnumber');

Route::post('/propertydetails/{no}',[PropertyController::class, 'getthedetails'])->middleware(['auth'])->name('post.getthedetails');

Route::get('/dashboard',[PropertyController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/myproperties',[PropertyController::class, 'landlordlanding'])->middleware(['auth'])->name('landlord.dashboard');

Route::get('/editpropertydetail/{PID}',[PropertyController::class, 'editpropertydetails'])->middleware(['auth'])->name('landlord.editproperty');
Route::post('/update/{id}',[PropertyController::class, 'updatepropertydetails'])->middleware(['auth'])->name('landlord.updateproperty');
Route::get('/addproperty/{PID}',[PropertyController::class, 'addproperty'])->middleware(['auth'])->name('landlord.editproperty');
Route::post('/addpropertydetails/{PID}',[PropertyController::class, 'addthedetails'])->middleware(['auth'])->name('landlord.editproperty');


Route::get('/landlordmainpage', function () {
    return view('landlordmainpage');
});




require __DIR__.'/auth.php';
