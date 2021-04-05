<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/noofproperty', function () {
    return view('noofproperty');
});

Route::get('/property', function () {
    return view('property');
});

Route::get('/landlordmainpage', function () {
    return view('landlordmainpage');
});

Route::get('/myproperties', function () {
    return view('myproperties');
});

Route::get('/transfer', function () {
    return view('transfer');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
