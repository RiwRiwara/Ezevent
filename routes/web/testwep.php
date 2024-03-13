<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Services\AzureBlobService;

Route::get('/check-php-extensions', function () {
    $extensions = [
        'fileinfo' => 'php_fileinfo',
        'mbstring' => 'php_mbstring',
        'openssl' => 'php_openssl',
        'xsl' => 'php_xsl',
        'curl' => 'php_curl',
        'gd' => 'GD',
        'zip' => 'ZipArchive',
    ];

    $results = [];
    foreach ($extensions as $extension => $name) {
        if (extension_loaded($extension)) {
            $results[] = "$name extension is enabled.";
        } else {
            $results[] = "$name extension is not enabled. Please enable it.";
        }
    }

    return implode("<br>", $results);
});





Route::get('/azure-test', function () {

    $blobService = new AzureBlobService();
    return $blobService->getBlobUrl('userprofile', 'test.png');
});
