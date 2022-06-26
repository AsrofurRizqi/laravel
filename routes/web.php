<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laptop_controller;

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
    return view('index');
});
Route::get('/tambah', function () {
    return view('tambah',[
        "title" => "Add Data Laptop"
    ]);
});
Route::get('/profile', function () {
    return view('profile',[
        "title" => "Profile Web"
    ]);
});

Route::get('/api/get-data',[laptop_controller::class,'getAll']);

Route::post('/api/create-data',[laptop_controller::class,'save']);

Route::get('/api/update-data/{id}',[laptop_controller::class,'update']);

Route::get('/api/delete-data/{id}',[laptop_controller::class,'delete']);

Route::post('/api/updated/{id}',[laptop_controller::class,'updated']);
