<?php

use Illuminate\Support\Facades\Route;

Route::get('/unauthorized', function () {
    return response()->json([
        'status' => false,
        'message' => 'Please login to continue',
        'errors' => 'unauthorized',
        'code' => 401
    ], 401);
})->name('unauthorized');
