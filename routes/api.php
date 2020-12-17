<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\PractitionersController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/users', function (Request $request) {
    return $request->user();
});

Route::get("/visits",[VisitsController::class,'get']);
Route::get("/visits/{id}",[VisitsController::class,'getOne']);
Route::get("/medicines",[\App\Http\Controllers\MedicinesController::class,'take']);
Route::get("/medicines/{id}",[\App\Http\Controllers\MedicinesController::class,'takeOne']);
Route::get("/practitioners",[\App\Http\Controllers\PractitionersController::class,'catch']);
Route::get("/practitioners/{id}",[\App\Http\Controllers\PractitionersController::class,'catchOne']);

