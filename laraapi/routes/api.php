<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyApi;
use App\Http\Controllers\Todoapi;

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

Route::get('getapi', [DummyApi::class,'getApi']);

Route::get('getTodo', [Todoapi::class,'todoList']);

Route::get('getTodo/{id}', [Todoapi::class,'todoDetails']);

//search by title parameter
Route::get('search/{title}', [Todoapi::class,'todoByName']);

Route::post('postTodo', [Todoapi::class,'addTodo']);

Route::put('updateTodo', [Todoapi::class,'update']);

Route::delete('deleteTodo/{id}', [Todoapi::class,'destroy']);
