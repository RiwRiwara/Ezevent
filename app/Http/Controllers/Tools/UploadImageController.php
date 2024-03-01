<?php

declare(strict_types=1);
namespace App\Http\Controllers\Tools;

use Illuminate\Http\File;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Utils\ImageConverter;

use Illuminate\Support\Str;

final class UploadImageController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        try {
            $imageData = json_decode($request->input('image'), true);
        } catch (\Exception $e) {
            toastr()->addError('Error uploading image');
            return redirect()->back();
        }

        $path = Storage::path($imageData['path']);
        $extension = $imageData['extension'];
        $savePath = Str::replaceLast('.'.$extension, '.webp', $path);

        try {
            $imageConverter = new ImageConverter($path, $savePath);
            $imageConverter->convertToWebp();

            toastr()->addSuccess('Image uploaded successfully');
        } catch (\Exception $e) {
            toastr()->addError('Error converting image to webp');
            return redirect()->back();
        }
        return redirect()->back();
    }
}
