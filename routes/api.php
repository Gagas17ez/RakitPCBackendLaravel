<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasingController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\CpuCoolerController;
use App\Http\Controllers\MotherboardController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('Casing/all',[CasingController::class,'getCasing']);
Route::post('Casing/filter',[CasingController::class,'postCasingFilter']);
Route::get('Casing/{id}',[CasingController::class,'getCasingID']);

Route::get('Cpu/all',[CpuController::class,'getCpu']);
Route::post('Cpu/filter',[CpuController::class,'postCpuFilter']);
Route::get('Cpu/{id}',[CpuController::class,'getCpuID']);

Route::get('CpuCooler/all',[CpuCoolerController::class,'getCpuCooler']);
Route::post('CpuCooler/filter',[CpuCoolerController::class,'postCpuCoolerFilter']);
Route::get('CpuCooler/{id}',[CpuCoolerController::class,'getCpuCoolerID']);

Route::get('Motherboard/all',[MotherboardController::class,'getMobo']);
Route::post('Motherboardr/filter',[MotherboardController::class,'postMoboFilter']);
Route::get('Motherboard/{id}',[MotherboardController::class,'getMoboID']);