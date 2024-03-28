<?php

namespace App\Traits;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use App\Services\AzureBlobService;

trait UploadImageTrait
{
    public function upLoadSingleImage(Request $request, String $file_name, String $containerName, String $prefix = "")
    {
    }
}
