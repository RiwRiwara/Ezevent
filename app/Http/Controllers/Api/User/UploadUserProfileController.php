<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\User;
use App\Services\AzureBlobService;


class UploadUserProfileController extends Controller
{

    public function __construct()
    {
        //
    }
    public function __invoke(Request $request)
    {
        return $this->uploadUserProfile($request);
    }

    public function uploadUserProfile(Request $request)
    {
        try {
            $image_tmp = json_decode($request->input('image'), true);
        } catch (\Exception $e) {
            toastr()->addError('Error uploading image');
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


            return response()->json([
                'message' => 'Profile image uploaded',
                'user' => $user
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error uploading image', 'error' => $e->getMessage()
            ], 500);
        }
    }
}
