<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/test-admin', function () {
    return response()->json(['message' => 'Admin is working...', 'role' => auth()->user()->role->name]);
});
