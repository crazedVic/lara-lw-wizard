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

Route::get('/insurance/add', \App\Http\Livewire\Wizard\Base::class);
Route::get('/insurance/{id}', \App\Http\Livewire\Insurance\Edit::class);
Route::get('/', \App\Http\Livewire\Index::class);
