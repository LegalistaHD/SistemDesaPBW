<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SettingsController;

Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);

Route::get('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'useradmin'], function() {

    Route::get('panel/dashboard', [DashboardController::class, 'dashboard']);
    
    Route::get('panel/users', [UsersController::class, 'users']);
    Route::get('panel/users/add', [UsersController::class, 'add']);
    Route::post('panel/users/add', [UsersController::class, 'insert']);
    Route::get('panel/users/edit/{id}', [UsersController::class, 'edit']);
    Route::post('panel/users/edit/{id}', [UsersController::class, 'update']);
    Route::get('panel/users/delete/{id}', [UsersController::class, 'delete']);

    Route::get('panel/roles', [RoleController::class, 'list']);
    Route::get('panel/roles/add', [RoleController::class, 'add']);
    Route::post('panel/roles/add', [RoleController::class, 'insert']);
    Route::get('panel/roles/edit/{id}', [RoleController::class, 'edit']);
    Route::post('panel/roles/edit/{id}', [RoleController::class, 'update']);
    Route::get('panel/roles/delete/{id}', [RoleController::class, 'delete']);
   
    Route::get('panel/surat', [SuratController::class, 'surat']);
    
    Route::get('panel/settings', [SettingsController::class, 'settings']);

});


