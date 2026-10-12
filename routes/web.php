<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListworkController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/works', [ListworkController::class, 'index']);
Route::get('/about', function () { return view('page.about'); });
Route::get('/project', [ListworkController::class, 'index']);
Route::get('/project/{id}', [ListworkController::class, 'show'])->name('project.detail');
Route::get('/special', function () { return view('page.special'); });