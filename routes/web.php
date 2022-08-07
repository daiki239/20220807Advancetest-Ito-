<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\managementController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// お問い合わせ入力ページ
Route::get('/', [ContactsController::class, 'index']);
Route::get('/management', [ContactsController::class, 'managemment']);


Route::get('/edit', [TodoController::class, 'editTodo']);
Route::post('/edit/{id}', [TodoController::class, 'updateTodo']);


Route::post('/todos', [TodoController::class, 'addTodo']);
Route::delete('/todos/{id}', [TodoController::class, 'deleteTodo']);



// 確認ページ
Route::post('/confirm', 'App\Http\Controllers\ContactsController@confirm')->name('confirm');

// 完了ページ
Route::post('/complete', 'App\Http\Controllers\ContactsController@complete')->name('complete');

// 管理ページ
Route::post('/management', 'App\Http\Controllers\managementController@management')->name('management');