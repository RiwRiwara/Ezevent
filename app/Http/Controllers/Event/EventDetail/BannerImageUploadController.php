<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use App\Services\AzureBlobService;

class BannerImageUploadController extends Controller
{
    public function __invoke(Request $request, $event_id)
    {
        // chekc if file is present
        if (!$request->hasFile('banner_image')) {
            toastr()->addWarning(__('error.upload_profile_img'));
            return back()->withFragment('appearance');
        }

        // check if file is an image
        if (!$request->file('banner_image')->isValid()) {
            toastr()->addWarning(__('error.upload_profile_img'));
            return back()->withFragment('appearance');
        }


        try {
            $image = Image::read($request->file('banner_image')->path())->toWebp();

            $blobService = new AzureBlobService();
            $containerName = config('azure.containers.eventimgs');
            $blobName = $event_id . '_' . now() . '.webp';
            $decodeImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image->toDataUri()));
            $blobService->uploadBlob($containerName, $blobName, $decodeImage, $image->mediaType());

            $event = Event::where('event_id', $event_id)->first();

            // delete temp image
            Storage::deleteDirectory('tmp');

            // delete old image
            $blobService->deleteBlob($containerName, $event->banner_img);
            $blobService->deleteBlob($containerName, $event->thumbnail);

            // update Event banner image
            $event->banner_image = $blobName;
            $event->thumbnail = $blobName;
            $event->save();
        } catch (\Exception $e) {
            toastr()->addError('Error uploading image' . $e->getMessage());
            return back()->withFragment('appearance');
        }

        toastr()->addSuccess('Image uploaded successfully');
        return back()->withFragment('appearance');
    }
}
