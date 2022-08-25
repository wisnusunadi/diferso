<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

//Login Method
Route::prefix('dash')->group(function () {
      Route::get('/', [App\Http\Controllers\DashController::class, 'index'])->name('index');
      Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
      Route::group(['prefix' => '/portfolio'], function () {
        Route::get('/show', [App\Http\Controllers\DashController::class, 'show_port'])->name('port.show');
        Route::get('/create', [App\Http\Controllers\DashController::class, 'create_port'])->name('port.create');
        Route::post('/store', [App\Http\Controllers\DashController::class, 'store_port'])->name('port.store');
        Route::get('/edit/{id}', [App\Http\Controllers\DashController::class, 'edit_port'])->name('port.edit');
        Route::put('/update/{id}', [App\Http\Controllers\DashController::class, 'update_port'])->name('port.update');
        Route::delete('/delete', [App\Http\Controllers\DashController::class, 'delete_port'])->name('port.delete');
      });
      Route::group(['prefix' => '/article'], function () {
        Route::get('/show', [App\Http\Controllers\DashController::class, 'show_article'])->name('article.show');
        Route::get('/create', [App\Http\Controllers\DashController::class, 'create_article'])->name('article.create');
        Route::get('/edit/{id}', [App\Http\Controllers\DashController::class, 'edit_article'])->name('article.edit');
        Route::get('/single/{id}', [App\Http\Controllers\DashController::class, 'single_article'])->name('article_single');
        Route::post('/store', [App\Http\Controllers\DashController::class, 'store_article'])->name('article.store');
        Route::put('/update/{id}', [App\Http\Controllers\DashController::class, 'update_article'])->name('article.update');
        Route::delete('/delete', [App\Http\Controllers\DashController::class, 'delete_article'])->name('article.delete');
      });
});
