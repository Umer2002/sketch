<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // return $next($request);
        if(Auth::check())
        {
            if(Auth::user()->role_as == 'user')
            {
                return $next($request);
            }
            else
            {
                toastr()->success('Login Successfully!');
                return redirect('User_Dashboard');
            }
        }
        else
        {
            toastr()->error('An error has occurred Please Login First.');
            return back();
        }
    }
}