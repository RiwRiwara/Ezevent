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
use App\Constants\Provinces;
use Illuminate\Validation\ValidationException;
use App\Constants\Gender;
use App\Http\Requests\Auth\RegisterRequest;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $page_data = [
            'provinces' => Provinces::provinces(),
            'districts' => Cities::cities(),
            'cities' => Districts::districts(),
            'gender' => Gender::gender(),
        ];

        $breadcrumbItems = [
            ['label' => 'Login', 'url' => '/login'],
            ['label' => 'Register']
        ];


        return view('guest.register', compact('page_data', 'breadcrumbItems'));
    }


    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request): RedirectResponse
    {
        try {
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
            toastr()->addSuccess('You have successfully registered!');
            return redirect(RouteServiceProvider::HOME);
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator->getMessageBag())->withInput();
        }
    }
    
}
