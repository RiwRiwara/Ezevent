<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class UserAgentMiddleware
{
    public function handle($request, Closure $next)
    {
        $userAgent = $request->header('User-Agent');
        Log::info($userAgent);

        return $next($request);
    }
}
