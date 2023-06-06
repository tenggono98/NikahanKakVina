<?php

use App\Http\Livewire\Admin\Home as AdminHome;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Home;
use App\Http\Livewire\Admin\Login;
use App\Http\Livewire\Admin\Tamu;
use App\Http\Livewire\LoginComponen;
use Illuminate\Auth\Events\Logout;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', LoginComponen::class)->name('login');
Route::get('/logout', LoginComponen::class,'logout')->name('logout');


// Admin
Route::prefix('admin')->group(function () {
    Route::get('/beranda', AdminHome::class)->name('admin.beranda')->middleware('auth');
    Route::get('/tamu', Tamu::class)->name('admin.tamu')->middleware('auth');
});


// Web
Route::get('/', Home::class)->name('home');


