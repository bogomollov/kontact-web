<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');\

Route::apiResource('departments', DepartmentController::class);
Route::apiResource('roles', RoleController::class);

Route::get('users', [UserController::class, 'index']);
Route::get('users/search', [UserController::class, 'search']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::post('users', [UserController::class, 'store']);