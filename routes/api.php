<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'service' => 'devops-task-manager',
        'timestamp' => now()->toISOString(),
    ]);
});

Route::apiResource('tasks', TaskController::class);