<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */

     public function handle(Request $request, Closure $next, string $role)
     {
         // Check if the user is authenticated
         if (!Auth::check()) {
             return abort(401, 'Unauthorized'); // Return 401 instead of 403 for unauthenticated users
         }
     
         // Check if the user is authenticated
         $user = Auth::user();
         if ($user->role_id !== $role) {
             return abort(403, 'Unauthorized'); // Return 403 for unauthorized users
         }

        //  
     
         return $next($request);
     }
}
