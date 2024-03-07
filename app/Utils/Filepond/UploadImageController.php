<?php

declare(strict_types=1);

namespace App\Utils\Filepond;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Intervention\Image\Laravel\Facades\Image;
use App\Services\AzureBlobService;


final class UploadImageController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
      return redirect()->back()->with('success', 'Image uploaded successfully');
    }
}
