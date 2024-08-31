<?php

use App\Http\Controllers\cursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

/*
Route::get('/', homeController::class);
Route::get('cursos', [cursoController::class, 'index']);
Route::get('cursos/create', [cursoController::class, 'create']);
Route::get('cursos/{curso}', [cursoController::class, 'show']);
*/

Route::get('/', homeController::class);

Route::controller(cursoController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

