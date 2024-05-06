<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use App\Models\User;
use Illuminate\Support\Facades\Log;
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

        // Check if image is uploaded
        if (!$request->has('image')) {
            return response()->json([
                'message' => 'No image uploaded'
            ], 400);
        }

        

        
        $blobService = new AzureBlobService();
        $containerName = 'testprofileimgs';
        $blobName = auth()->user()->user_id . '_' . now() . '.webp';

        $image = Image::read($request->input('image')['base64'])->toWebp();

        // Decode base64 string
        $decodeImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image->toDataUri()));





        try {
            $blobService->uploadBlob($containerName, $blobName, $decodeImage, 'image/webp');
            // delete old image
            $blobService->deleteBlob($containerName, auth()->user()->profile_img);

            // update User profile image
            $user = User::where('user_id', auth()->user()->user_id)->first();
            $user->profile_img = $blobName;
            $user->save();

            return response()->json([
                'message' => 'Profile image uploaded successfully',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error uploading image', 'error' => $e->getMessage()
            ], 500);
        }
    }
}
