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
?>