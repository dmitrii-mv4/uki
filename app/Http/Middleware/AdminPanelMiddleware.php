<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //dd(auth()->check());
        //dd(auth()->id());
        //dd(auth()->user()->role);

        if(auth()->check() == false) 
        {
            return redirect()->route('admin.login');
        }

        if(auth()->user()->role != 'admin')
        {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
