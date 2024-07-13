<?php

use Illuminate\Support\Facades\Route;
use App\Models\task; 
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TaskController::class, 'index'])->name('task.index');
Route::post('/', [TaskController::class, 'complete'])->name('task.complete');
Route::delete('/{task}', [TaskController::class, 'delete'])->name('task.delete');
Route::get('/addtask', [TaskController::class, 'addTask'])->name('task.addTask');
Route::post('/addtask', [TaskController::class, 'saveTask'])->name('task.saveTask');


Route::post('/done', function () {
    
});