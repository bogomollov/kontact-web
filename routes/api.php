<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('departments', [DepartmentController::class, 'index']);
Route::get('departments/{department}', [DepartmentController::class, 'show']);
Route::post('departments', [DepartmentController::class, 'store']);
Route::put('departments/{department}', [DepartmentController::class, 'update']);
Route::delete('departments/{department}', [DepartmentController::class, 'destroy']);

Route::get('positions', [PositionController::class, 'index']);
Route::get('positions/{position}', [PositionController::class, 'show']);
Route::post('positions', [PositionController::class, 'store']);
Route::put('positions/{position}', [PositionController::class, 'update']);
Route::delete('positions/{position}', [PositionController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/search', [UserController::class, 'search']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

Route::get('accounts', [AccountController::class, 'index']);
Route::get('accounts/{account}', [AccountController::class, 'show']);
Route::post('accounts', [AccountController::class, 'store']);
Route::put('accounts/{account}', [AccountController::class, 'update']);
Route::delete('accounts/{account}', [AccountController::class, 'destroy']);