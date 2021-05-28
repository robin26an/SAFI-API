<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\PractitionersController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ExpenseOutPackagesController;



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
Route::get("/employee/{id}",[EmployeeController::class,'list']);
Route::get("/visits/{id}",[VisitsController::class,'lists']);


Route::get("/expense_proofs",[\App\Http\Controllers\ExpenseProofsController::class,'list']);

Route::get("/expense",[\App\Http\Controllers\ExpenseController::class,'show']);
Route::get("/expense/{id}",[\App\Http\Controllers\ExpenseController::class,'showOne']);

Route::get("/expense_out",[\App\Http\Controllers\ExpenseOutPackagesController::class,'pack']);
Route::get("/expense_out/{id}",[\App\Http\Controllers\ExpenseOutPackagesController::class,'packOn']);

Route::get("expense_package",[\App\Http\Controllers\ExpensePackageTypesController::class,'type']);
Route::post("expense_package/add",[\App\Http\Controllers\ExpensePackageTypesController::class,'typeAdd']);
Route::get("expense_package/{id}",[\App\Http\Controllers\ExpensePackageTypesController::class,'typeOne']);
