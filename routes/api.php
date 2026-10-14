<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello World from Laravel 13!',
        'status' => 'success',
        'timestamp' => now()->toIso8601String()
    ]);
});
