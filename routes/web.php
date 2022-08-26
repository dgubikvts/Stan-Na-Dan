<?php

use App\Http\Livewire\Login;
use App\Http\Livewire\EditApartment;
use App\Http\Livewire\ShowApartment;
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
    return view('home');
});

Route::get('/admin-panel/login', Login::class)->middleware('guest')->name('login');

Route::get('/apartment/{apartment}', ShowApartment::class)->name('show-apartment');

Route::view('/admin-panel/add-apartment', 'admin.addApartment')->middleware('auth');

Route::get('/admin-panel/edit-apartment/{apartment}', EditApartment::class)->name('edit-apartment')->middleware('auth');


