<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route:: get('/roles', [RoleController::class, 'index']);
Route:: get('/roles/{id}', [RoleController::class, 'show']);
Route:: post('/roles', [RoleController::class,'store']);
Route:: put('/roles/{id}',[RoleController::class, 'update']);
Route:: delete('/roles/{id}', [RoleController:: class,'destroy']);