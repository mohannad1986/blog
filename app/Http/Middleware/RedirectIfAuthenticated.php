<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next, string ...$guards): Response
    // {
    //     $guards = empty($guards) ? [null] : $guards;

    //     foreach ($guards as $guard) {
    //         if (Auth::guard($guard)->check()) {


    //             return redirect(RouteServiceProvider::HOME);
    //         }
    //     }

    //     return $next($request);
    // }


    // +++++++++++++++++++
    public function handle($request, Closure $next, $guard = null) {
        if (Auth::guard($guard)->check()) {
          $name = Auth::user()->name;

          switch ($name) {
            case 'user1':
               return redirect('/dashboard');
               break;

            default:
               return redirect('/home');
               break;
          }
        }
        return $next($request);
      }


    // ++++++++++++++++++++++
}
