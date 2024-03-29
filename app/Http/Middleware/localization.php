<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class localization
{
    // public function handle(Request $request, Closure $next)
    // {
    //     $locale = $request->segment(2); // Obtiene el segundo segmento de la URL

    //     if (in_array($locale, ['en', 'es'])) {
    //         App::setLocale($locale);
    //     } else {
    //         // Establecer el idioma predeterminado si el parámetro no es válido
    //         App::setLocale('es');
    //     }

    //     return $next($request);
    // }

    // public function handle(Request $request, Closure $next)
    // {
    //     $locale = $request->segment(2); // Obtén el segundo segmento de la URL
    //     if (in_array($locale, ['en', 'es'])) {
    //         App::setLocale($locale);
    //         Session::put('locale', $locale); // Almacena el idioma en la sesión
    //     } else {
    //         // Si el idioma ya está en la sesión, úsalo
    //         if (Session::has('locale')) {
    //             $locale = Session::get('locale');
    //             App::setLocale($locale);
    //         } else {
    //             // Establece el idioma predeterminado si no se encuentra en la sesión
    //             App::setLocale('es');
    //         }
    //     }
    //     return $next($request);
    // }

    // public function setLocale(Request $request)
    // {
    //     $locale = $request->input('locale');
    //     Session::put('locale', $locale);
    //     return response()->json(['success' => true]);
    // }

    public function handle(Request $request, Closure $next)
    {
        $this->setLocale($request->segment(2));
        return $next($request);
    }

    public function setLocale($locale)
    {
        if (in_array($locale, ['en', 'es'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        } else {
            // Si el idioma ya está en la sesión, úsalo
            if (Session::has('locale')) {
                $locale = Session::get('locale');
                App::setLocale($locale);
            } else {
                // Establece el idioma predeterminado si no se encuentra en la sesión
                App::setLocale('es');
            }
        }
    }
}
