<?php

use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('hello', function(){
    return 'Halo dari laravel 12!';
});

Route::get('/info', function(){
    return response()->json([
    'app' => 'Task API',
    'version' => '1.0',
    'author' => 'BTNG DNCC 2026',
    ]);
});

Route::post('/hello', function(){
    return response()->json([
        'message' => 'Request POST berhasil diterima!'
    ]);
});

Route::get('/tasks', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);