<?php
use Illuminate\Support\Facades\Route;

// Test for api is working
Route::get('/test', function () {
    return response()->json(['message' => 'API is working...']);
});


// fall back route
Route::fallback(function () {
    return response()->json(['message' => 'Route not found'], 404);
});

require __DIR__ . '/api/authApi.php';
require __DIR__ . '/api/userApi.php';
require __DIR__ . '/api/adminApi.php';
require __DIR__ . '/api/eventApi.php';
require __DIR__ . '/api/myEventApi.php';
require __DIR__ . '/api/applicationApi.php';
require __DIR__ . '/api/badgeApi.php';
