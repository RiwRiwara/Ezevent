<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
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
                ['label' => 'Dashboard', 'url' => route('dashboard')],
                ['label' => 'My Profile'],
            ]

        ];

        return view('profile.profileDetail', compact('user', 'page_data'));
    }
}
