<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Constants\Cities;
use App\Constants\Districts;
use App\Constants\Provinces;
use App\Constants\Gender;
use App\Constants\Time;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }



    public function myProfileDetail(Request $request): View
    {
        $user = $request->user();
        $isThai = app()->getLocale() === 'th';

        $user->gender = Gender::getGenderById($user->gender);
        $user->date_of_birth = (new Time($user->date_of_birth, $isThai))->getDateBirthObject();

        $page_data = [
            'isThai' => $isThai,
            'provinces' => Provinces::provinces(),
            'districts' => Cities::cities(),
            'cities' => Districts::districts(),
            'gender' => Gender::gender(),
            'breadcrumbItems' => [
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'My Profile'],
            ]

        ];

        return view('profile.profilePage', compact('user', 'page_data'));
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        toastr()->addSuccess(__('success.profile_update'));

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
