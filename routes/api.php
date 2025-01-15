<?php

use App\Http\Controllers\DepartmentController;
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

Route::get('roles', [RoleController::class, 'index']);
Route::get('roles/{role}', [RoleController::class, 'show']);
Route::post('roles', [RoleController::class, 'store']);
Route::put('roles/{role}', [RoleController::class, 'update']);
Route::delete('roles/{role}', [RoleController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/search', [UserController::class, 'search']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{user}', [UserController::class, 'update']);