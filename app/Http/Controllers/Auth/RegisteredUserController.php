<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use App\Constants\Cities;
use App\Constants\Districts;
use App\Http\Requests\Auth\RegisterRequest;
use App\Constants\Provinces;
use App\Constants\Gender;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $FORM_DATA_ITEMS = [
            'provinces' => Provinces::provinces(),
            'districts' => Cities::cities(),
            'cities' => Districts::districts(),
            'gender' => Gender::gender(),
        ];

        $breadcrumbItems = [
            ['label' => 'Login', 'url' => '/login'],
            ['label' => 'Register']
        ];


        return view('guest.register', compact('FORM_DATA_ITEMS', 'breadcrumbItems'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        if ($request->password !== $request->password_confirmation) {
            flash()->addError('Password and Confirm Password do not match');
            return redirect()->back();
        }

        if ($request->address === null || $request->province === null || $request->district === null || $request->city === null || $request->zipcode === null) {
            flash()->addError('Please fill in the address information');
            return redirect()->back();
        }

        $email = User::where('email', $request->email)->first();
        if ($email) {
            flash()->addError('Email already exists');
            return redirect()->back();
        }

        $mobile_number = User::where('mobile_number', $request->mobile_number)->first();
        if ($mobile_number) {
            flash()->addError('Mobile number already exists');
            return redirect()->back();
        }



        $date_birth = date('Y-m-d', strtotime($request->date_birth));
        $user = User::create([
            'user_id' => Str::uuid(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'mobile_number' => $request->mobile_number,
            'password' => Hash::make($request->password),
            'date_of_birth' => $date_birth,
            'gender' => $request->gender,
            'address' => $request->address,
            'province' => $request->province,
            'district' => $request->district,
            'city' => $request->city,
            'zipcode' => $request->zipcode,
        ]);

        event(new Registered($user));
        Auth::login($user);
        
        flash()->addSuccess('You have successfully registered!');
        return redirect(RouteServiceProvider::HOME);
    }
}
