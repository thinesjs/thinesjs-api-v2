<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(APIController::class)->group(function () {
    Route::get('ping', 'getPing');
    Route::get('education', 'getEducation');
    Route::get('experience', 'getExperience');
    Route::get('portfolio', 'getPortfolio');
    Route::get('about', 'getAbout');
    Route::get('gallery', 'getGallery');
    Route::get('message', 'addMessage');
});
