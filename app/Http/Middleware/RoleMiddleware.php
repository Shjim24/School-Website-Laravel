<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * This middleware will check if the authenticated user has any of the required roles.
     * Roles can be passed as a pipe-separated string, e.g., 'role:super-admin|admin'.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  ...$roles  The roles to check for.
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // First, check if the user is authenticated.
        if (!Auth::check()) {
            // This case should ideally be handled by the 'auth' middleware first,
            // but it's good practice to have a safeguard.
            abort(403, 'User not authenticated.');
        }

        // Get the authenticated user.
        $user = Auth::user();

        // Use the hasAnyRole() method from the Spatie package.
        // This will return true if the user has at least one of the specified roles.
        if (!$user->hasAnyRole($roles)) {
            // If the user does not have any of the required roles,
            // abort the request with a 403 Forbidden error.
            abort(403, 'UNAUTHORIZED ACTION.');
        }

        // If the user has the required role, proceed with the request.
        return $next($request);
    }
}