<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Backend\Admin\AgentController;
use App\Http\Controllers\Backend\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Backend\Admin\RolePermissionController;
use App\Http\Controllers\Backend\Admin\StudentController;
use App\Http\Controllers\Backend\Agent\DashbaordController as AgentDashbaordController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

//Frontend Routes
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/agent',[HomeController::class,'agent'])->name('agent');
Route::get('/sign-up',[HomeController::class,'signUp'])->name('sign-up');
Route::get('/student',[HomeController::class,'student'])->name('student');
Route::get('/service-providers',[HomeController::class,'serviceproviders'])->name('serviceproviders');
Route::get('/institute',[HomeController::class,'institute'])->name('institute');
Route::get('/usa',[HomeController::class,'usa'])->name('usa');
Route::get('/event',[HomeController::class,'event'])->name('event');
Route::get('/about',[HomeController::class,'about'])->name('about');



Route::group(['prefix'=>'auth', 'as' => 'admin.', 'middleware'=>['guest']],function(){
    Route::get('/login',[AuthenticatedSessionController::class,'create'])->name('login');
});

//Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.','middleware' => ['auth','admin']],function(){
    Route::get('/dashboard',[AdminDashboardController::class,'dashboard'])->name('dashboard');
    Route::resource('/agent',AgentController::class);
    Route::resource('/student',StudentController::class);
    Route::resource('/role',RolePermissionController::class);
    Route::get('/logs',[AdminDashboardController::class,'logs'])->name('logs');
});

//Agent Routes
Route::group(['prefix'=>'agent','as'=>'agent.','middleware' => ['auth','agent']],function(){
    Route::get('/dashboard',[AgentDashbaordController::class,'dashboard'])->name('dashboard');
});



require_once __DIR__.'/auth.php';

