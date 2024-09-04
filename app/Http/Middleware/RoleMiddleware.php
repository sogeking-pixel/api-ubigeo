<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {

        /** @var \App\Models\MyUserModel $user **/
       $user = Auth::guard('sanctum')->user();
        if (!$user || !$user->hasRole($role)) {
            return response()->json(['message' => 'No tienes permiso para acceder a esta ruta'], 403);
        }

        return $next($request);
    }
}