<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->cookie('Language') === 'Arabic' ? 'ar' : 'en';
        view()->share('lang', $lang);
        view()->share('isArabic', $lang === 'ar');

        return $next($request);
    }
}
