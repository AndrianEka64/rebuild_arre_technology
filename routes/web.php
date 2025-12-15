<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProjectController::class,'lihat']);
Route::get('/portofolio',[ProjectController::class,'semua']);
Route::get('/portofolio/detail/{id}',[ProjectController::class,'show']);
Route::get('/login',[AuthController::class,'showlogin'])->name('login');
Route::post('/login/store',[AuthController::class,'login']);
Route::middleware('auth')->group(function(){
    Route::post('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard',[ProjectController::class,'info']);
    Route::get('/dashboard/table',[ProjectController::class,'index']);
    Route::get('/dashboard/create',[ProjectController::class,'create']);
    Route::post('/dashboard/store',[ProjectController::class,'store']);
    Route::get('/dashboard/edit/{id}',[ProjectController::class,'edit']);
    Route::post('/dashboard/update/{id}',[ProjectController::class,'update']);
    Route::get('/dasboard/delete/{id}',[ProjectController::class,'destroy']);
});

// Route::get('/index/login', [AuthController::class, 'showlogin']);
// Route::post('/index/login/store', [AuthController::class, 'login']);
// Route::post('/index/logout', [AuthController::class, 'logout']);