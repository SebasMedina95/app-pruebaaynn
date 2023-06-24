<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (!auth()->user()->admin) { //Usuario autenticado y ademas admin en true
        //     return redirect('/');
        // }

        if(!auth()->check()){
            return redirect('/login');
        }

        if(!auth()->user()->admin){ //Config in Kernel.php
            return redirect('/');
        }

        return $next($request);
    }
}
