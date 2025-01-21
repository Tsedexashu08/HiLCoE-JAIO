<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;

class LogUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $action =null): Response
    {
        $response = $next($request);
        if (Auth::check() && $action) {
            UserActivity::create([
                'user_id' => Auth::id(),
                'action' => $action,
                'created_at' => now(),
            ]);
        }
        return $response;
    }
}
