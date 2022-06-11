<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::get('/', function () {
    return redirect('task');
});

Route::prefix('task')->group(function () {
    Route::get('/', [TaskController::class,'index']);
    Route::get('/edit/{task}', [TaskController::class,'edit'])->name('editTask');
    Route::post('/store',[TaskController::class,'store'])->name('storeTask');
    Route::delete('/delete/{id}',[TaskController::class,'delete'])->name('deleteTask');
    Route::put('/update/{task}',[TaskController::class,'update'])->name('updateTask');
});
