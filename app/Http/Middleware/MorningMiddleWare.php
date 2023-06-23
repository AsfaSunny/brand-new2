<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MorningMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $country_arr = [
            'Bangladesh',
            'Qatar',
            'Russia',
            'India',
            'Pakistan',
        ];

        if (in_array($request->country, $country_arr)) {
            return $next($request);
        }

        return redirect()->to('/');
    }
}
