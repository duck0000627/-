<?php
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[\App\Http\Controllers\todoController::class, 'index'])->name('index');

Route::get('/create',[\App\Http\Controllers\todoController::class, 'create'])->name('create');
Route::post('/create',[\App\Http\Controllers\todoController::class, 'get_create_data'])->name('get_create_data');

Route::get('/delete',[\App\Http\Controllers\todoController::class, 'delete_data'])->name('delete_data');

Route::get('/edit', [\App\Http\Controllers\TodoController::class, 'edit_data'])
    ->name('edit_data');
Route::post('/edit', [\App\Http\Controllers\TodoController::class, 'get_edit_data'])
    ->name('get_edit_data');

Route::get('/chart',[\App\Http\Controllers\todoController::class, 'chart'])->name('chart');
