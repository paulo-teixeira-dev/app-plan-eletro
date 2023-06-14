<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EletroController;

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

Route::post('test-connection', function (){
    return ['Hello World'];
});

Route::group(['prefix' => 'eletro'], function () {
    Route::get('/listing', [EletroController::class, 'listing']);
    Route::post('/store', [EletroController::class, 'store']);
    Route::get('/show/{id}', [EletroController::class, 'show']);
    Route::put('/update/{id}', [EletroController::class, 'update']);
    //Route::put('/update-credential/{id}', [UserController::class, 'updateCredential']);
    //Route::post('/update-img/{id}', [UserController::class, 'updateImg']);
    //Route::delete('/delete/{id}', [UserController::class, 'delete']);
});
