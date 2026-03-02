<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ManiController::class, 'home'])->name('home');
Route::get('/about', [ManiController::class, 'about'])->name('about');
Route::get('/service', [ManiController::class, 'service'])->name('service');
Route::get('/contact', [ManiController::class, 'contact'])->name('contact');
Route::get('/project', [ManiController::class, 'Project'])->name('project');
Route::post('/admin/projects', [ManiController::class, 'store'])->name('project.store');
Route::put('/admin/projects/{id}', [ManiController::class, 'update'])->name('project.update');
Route::delete('/admin/projects/{id}', [ManiController::class, 'destroy'])->name('project.destroy');
Route::get('/project/{slug}', [ManiController::class, 'showProject'])->name('project.show');
Route::post('/send-message',[ManiController::class,'sendMessage']);
Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/logout',[AuthController::class,'logout']);