<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AzureBlobService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;

class UploadUserProfileController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $image_tmp = json_decode($request->input('image'), true);
        if (!$image_tmp) {
            toastr()->addWarning('please upload an image first');
            return redirect()->back();
        }

        try {
            $path = Storage::path($image_tmp['path']);
            $image = Image::read($path)->toWebp();

            $blobService = new AzureBlobService();
            $containerName = 'testprofileimgs';
            $blobName = auth()->user()->user_id . '_' . now() . '.webp';

            $decodeImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image->toDataUri()));

            $blobService->uploadBlob($containerName, $blobName, $decodeImage, $image->mediaType());

            // delete temp image
            Storage::deleteDirectory('tmp');

            // delete old image
            $blobService->deleteBlob($containerName, auth()->user()->profile_img);

            // update User profile image
            $user = User::where('user_id', auth()->user()->user_id)->first();
            $user->profile_img = $blobName;
            $user->save();

            toastr()->addSuccess('Image uploaded successfully');
        } catch (\Exception $e) {
            toastr()->addError('Error uploading image' . $e->getMessage());
            return redirect()->back();
        }
        return redirect()->back();
    }
}
