<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasingController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\CpuCoolerController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\PowerSupplyController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\VgaController;
use App\Http\Controllers\BuildsController;
use App\Http\Controllers\FanController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\keyboardController;
use App\Http\Controllers\MouseController;
use App\Http\Controllers\SimpanBuildController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;

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

Route::middleware(['cors'])->group(function () {
    Route::post('/Forum/Upload',[PostController::class,'postSavePost']);
    Route::get('/Forum/List',[PostController::class,'getPost']);
    Route::get('/Forum/List/{id}',[PostController::class,'getPostID']);
    Route::get('/Forum/Delete/{id}',[PostController::class,'getDeletePostID']);

    Route::post('/Profile/Upload',[ProfileController::class,'postSaveProfile']);
    Route::get('/Profile/List',[ProfileController::class,'getProfileAll']);
    Route::get('/Profile/{id}',[ProfileController::class,'getProfileIdUser']);
    Route::get('/Profile/Delete/{id}',[ProfileController::class,'getDeleteProfileID']);

    Route::post('/Comment/Upload',[CommentController::class,'postSaveComment']);
    Route::get('/Comment/List',[CommentController::class,'getCommentAll']);
    Route::get('/Comment/{id}',[CommentController::class,'getCommentID']);
    Route::get('/Comment/Delete/{id}',[CommentController::class,'getDeleteCommentID']);

    Route::get('/SimpanBuild/All',[SimpanBuildController::class,'getBuildAll']);
    Route::post('/SimpanBuild/Upload',[SimpanBuildController::class,'postSaveBuild']);
    Route::get('/SimpanBuild/{id}',[SimpanBuildController::class,'getSimpanID']);
    Route::get('/SimpanBuild/Delete/{id}',[SimpanBuildController::class,'getDeleteCommentID']);
});

Route::get('Casing/All',[CasingController::class,'getCasing']);
Route::post('Casing/Filter',[CasingController::class,'postCasingFilter']);
Route::get('Casing/{id}',[CasingController::class,'getCasingID']);

Route::get('Cpu/All',[CpuController::class,'getCpu']);
Route::post('Cpu/Filter',[CpuController::class,'postCpuFilter']);
Route::get('Cpu/{id}',[CpuController::class,'getCpuID']);

Route::get('CpuCooler/All',[CpuCoolerController::class,'getCpuCooler']);
Route::post('CpuCooler/Filter',[CpuCoolerController::class,'postCpuCoolerFilter']);
Route::get('CpuCooler/{id}',[CpuCoolerController::class,'getCpuCoolerID']);

Route::get('Fan/All',[FanController::class,'getFan']);
Route::post('Fan/Filter',[FanController::class,'postFanFilter']);
Route::get('Fan/{id}',[FanController::class,'getFanID']);

Route::get('Motherboard/All',[MotherboardController::class,'getMobo']);
Route::post('Motherboard/Filter',[MotherboardController::class,'postMoboFilter']);
Route::get('Motherboard/{id}',[MotherboardController::class,'getMoboID']);

Route::get('Psu/All',[PowerSupplyController::class,'getPowerSupply']);
Route::post('Psu/Filter',[PowerSupplyController::class,'postPowerSupplyFilter']);
Route::get('Psu/{id}',[PowerSupplyController::class,'getPowerSupplyID']);

Route::get('Ram/All',[RamController::class,'getRam']);
Route::post('Ram/Filter',[RamController::class,'postRamFilter']);
Route::get('Ram/{id}',[RamController::class,'getRamID']);

Route::get('Storage/All',[StorageController::class,'getStorage']);
Route::post('Storage/Filter',[StorageController::class,'postStorageFilter']);
Route::get('Storage/{id}',[StorageController::class,'getStorageID']);

Route::get('Vga/All',[VgaController::class,'getVga']);
Route::post('Vga/Filter',[VgaController::class,'postVgaFilter']);
Route::get('Vga/{id}',[VgaController::class,'getVgaID']);

Route::get('Builds/All',[BuildsController::class,'getBuilds']);
Route::get('Builds/{id}',[BuildsController::class,'getBuildsID']);
Route::post('Builds/Detail',[BuildsController::class,'getBuildsDetail']);

Route::get('Monitor/All',[MonitorController::class,'getMonitor']);
Route::post('Monitor/Filter',[MonitorController::class,'PostMonitorFilter']);
Route::get('Monitor/{id}',[MonitorController::class,'getMonitorID']);

Route::get('Keyboard/All',[KeyboardController::class,'getKeyboard']);
Route::post('Keyboard/Filter',[KeyboardController::class,'PostKeyboardFilter']);
Route::get('Keyboard/{id}',[KeyboardController::class,'getKeyboardID']);

Route::get('Mouse/All',[MouseController::class,'getMouse']);
Route::post('Mouse/Filter',[MouseController::class,'PostMouseFilter']);
Route::get('Mouse/{id}',[MouseController::class,'getMouseID']);


