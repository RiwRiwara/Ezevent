<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::middleware('guest')->group(function () {

    Route::get('/', function (Request $request) {
        $userAgent = $request->header('User-Agent');
        return view('welcome', ['userAgent' => $userAgent]);
    });

});





