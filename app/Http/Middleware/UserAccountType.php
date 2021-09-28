<?php

namespace App\Http\Middleware;

//use App\Exceptions\UserInActiveException;
use Closure;
use Illuminate\Support\Facades\Auth;

class UserAccountType
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (empty(Auth::user()->account_type)) {
            // throw new UserInActiveException(403, "User is not activated.");
            return redirect('profile/select_account_type');
        }
        return $next($request);
    }
}
