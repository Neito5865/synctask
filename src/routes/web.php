<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

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
    Route::get('/', [ProjectsController::class, 'index'])->name('project.index');
    // プロジェクト新規作成ページ
    Route::get('/create', [ProjectsController::class, 'create'])->name('project.create');
    // プロジェクト新規作成処理
    Route::post('/create', [ProjectsController::class, 'store'])->name('project.store');
});
