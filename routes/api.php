<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\RecordLabelController;
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

/** ACTION ENDPOINTS **/

Route::post('addToLibrary', 'App\Http\Controllers\LibraryController@addToLibrary');
Route::post('addRecordLabel', 'App\Http\Controllers\RecordLabelController@addNew');


/** RESOURCES ENDPOINTS **/

Route::resource('library', LibraryController::class)->only([
    'index'
]);

Route::resource('getGenres', GenresController::class)->only([
    'index'
]);

Route::resource('getLabels', RecordLabelController::class)->only([
    'index'
]);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
