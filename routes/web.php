<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MensajesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/gallery', 'gallery');
Route::view('/usuario', 'usuario');
Route::view('/product', 'product');
Route::view('/service', 'service');
Route::view('/agenda', 'agenda.indexA');

Route::get('contact',[ContactController::class,'indexContact']);
Route::post('contact-form',[ContactController::class,'store']);
Route::get('mensajes',[MensajesController::class,'indexM']);

Route::get('admin',[UserController::class,'indexAdmin']);

Route::get('/register',[RegisterController::class,'show']);
Route::post('/register',[RegisterController::class,'register']);

Route::get('/login',[LoginController::class,'show']);
Route::post('/login',[LoginController::class,'login']);

Route::get('/home',[HomeController::class,'index']);
Route::get('/logout',[LogoutController::class,'logout']);

Route::get('/admin',[AdminController::class,'indexAdmin'])
    -> middleware('auth.admin')
    ->name('admin.indexAdmin');