<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cache;

class EnsureSingleDeviceLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            $sessionId = Session::getId();
            $cachedSessionId = Cache::get('user-session-' . $user->id);

            if ($cachedSessionId && $cachedSessionId !== $sessionId) {
                Auth::logout();
                return redirect()->route('login')->withErrors(['message' => 'Your account is logged in on another device.']);
            }

            Cache::put('user-session-' . $user->id, $sessionId, now()->addMinutes(config('session.lifetime')));
        }

        return $next($request);
    }
}
