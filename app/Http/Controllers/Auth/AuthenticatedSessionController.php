<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view
     * 
     * @return View.    
     */
    public function create(): View
    {
        return view('welcome');
    }

    /**
     * Handle an incoming authentication request.
     * 
     * @param  LoginRequest  $request
     * @return RedirectResponse
     */
    public function store(LoginRequest $request): RedirectResponse
    {

        $request->authenticate();

        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has role 1 or role 3
        if (!in_array($user->role_id, [1, 3, 4])) {
            // If the user doesn't have the required role, log them out
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // Redirect back with an error message
            toastr()->addError(__('auth.invalid_role'));
            return redirect()->back();
        }


        $request->session()->regenerate();

        toastr()->addSuccess(__('success.success_login'));
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     * 
     * @param  Request  $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
