<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated {
    /**
    * Handle an incoming request.
    *
    * @param  \Closure( \Illuminate\Http\Request ): ( \Symfony\Component\HttpFoundation\Response )  $next
    */

    public function handle( Request $request, Closure $next, string ...$guards ): Response {
        $guards = empty( $guards ) ? [ null ] : $guards;

        foreach ( $guards as $guard ) {
            if ( Auth::guard( $guard )->check() && Auth::user()->group === 'cliente' ) {
                return redirect( RouteServiceProvider::USER );
            }
            if ( Auth::guard( $guard )->check() && Auth::user()->group === 'profissional' ) {
                return redirect( RouteServiceProvider::PROF );
            }
            if ( Auth::guard( $guard )->check() && Auth::user()->group === 'admin' ) {
                return redirect( RouteServiceProvider::ADM );
            }
        }

        return $next( $request );
    }
}
