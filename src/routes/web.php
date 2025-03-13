<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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


// ログイン後
Route::group(['middleware' => 'auth'], function(){
    // トップページ
    Route::get('/', [ProjectController::class, 'index'])->name('project.index');

    // プロジェクト
    Route::prefix('project')->group(function () {
        Route::get('create', [ProjectController::class, 'create'])->name('project.create');
        Route::post('/', [ProjectController::class, 'store'])->name('project.store');
        Route::prefix('{project_id}')->group(function () {
            Route::get('/', [ProjectController::class, 'show'])->name('project.show');
            Route::get('edit', [ProjectController::class, 'edit'])->name('project.edit');
            Route::put('/', [ProjectController::class, 'update'])->name('project.update');

            // タスク
            Route::prefix('task')->group(function () {
                Route::get('create', [TaskController::class, 'create'])->name('task.create');
            });
        });
    });
});
