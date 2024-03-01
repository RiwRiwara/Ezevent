<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;


Route::get('/check-gd-extension', function () {
    if (extension_loaded('gd')) {
        return "GD extension is enabled.";
    } else {
        return "GD extension is not enabled. Please enable it.";
    }
});

Route::get('/testimg/{img_url}', function ($img_url) {
    $url = 'https://firstdraw.blob.core.windows.net/userprofile/'.$img_url;
    
    $response = Http::get($url);
    $img = $response->body();
    return response($img)->header('Content-Type', 'image/png');

});


// get azure config
// Route::get('/azure-config', function () {
//     return config('azure.blob_url').'?comp=list';
// });