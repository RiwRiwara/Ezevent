<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Constants\Cities;
use App\Constants\Districts;
use App\Constants\Provinces;
use App\Constants\Gender;
use App\Constants\Time;
use App\Models\User;

class UserDetailController extends Controller
{
    public function __invoke(Request $request, $user_id)
    {

        $user = User::where('user_id', $user_id)->first();
        if (!$user) {
            toastr()->addError('User not found');
            return redirect()->back();
        }
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
                ['label' => 'User Dashboard', 'url' => route('users-dashboard')],
                ['label' => $user->first_name . ' ' . $user->last_name],
            ]

        ];

        return view('admin.profileDetail', compact('user', 'page_data'));
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