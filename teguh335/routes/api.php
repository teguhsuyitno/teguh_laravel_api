<?php

use Illuminate\Http\Request;




Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthApiController@login');
    Route::post('logout', 'AuthApiController@logout');
    Route::post('refresh', 'AuthApiController@refresh');
    Route::post('me', 'AuthApiController@me');

});
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

Route::apiResource('artikel','ArtikelAPIController');
Route::apiResource('berita','BeritaAPIController');
Route::apiResource('pengumuman','PengumumanAPIController');
Route::apiResource('galeri','GaleriAPIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
