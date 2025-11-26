<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectTaskController;
use App\Http\Controllers\TaskCommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ProjectController::class)->prefix('projects')->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{project}', 'update');
    Route::patch('/{project}', 'update');

    Route::controller(ProjectTaskController::class)->prefix('{project}/tasks')->group(function () {
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::put('/{task}', 'update');
        Route::patch('/{task}', 'update');
    });
});

Route::controller(TaskCommentController::class)->prefix('tasks/{task}/comments')->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::put('/{comment}', 'update');
    Route::patch('/{comment}', 'update');
    Route::delete('/{comment}', 'destroy');
});
