<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $roleId = Auth::user()->role_id;
        if ($roleId == null) {
            # code...
            return redirect()->back();
        }
        
        $roleUser = Role::find($roleId)->name;
        if ($role == $roleUser) {
            return $next($request);
        }

        return redirect()->back();
        
    }
}
