<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\AzureBlobService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;

class UpdateAddressController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {

        $user = User::where('user_id', auth()->user()->user_id)->first();
        if ($user) {
            $user->address = $request->address;
            $user->city = $request->city;
            $user->province = $request->province;
            $user->district = $request->district;
            $user->save();
            toastr()->addSuccess('Address updated successfully');
            return redirect()->back();
        } else {
            toastr()->addError('User not found');
            return redirect()->back();
        }
    }
}
