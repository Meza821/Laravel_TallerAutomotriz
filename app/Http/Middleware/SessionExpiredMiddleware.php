<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionExpiredMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Obtener la ruta actual
        $route = $request->path(); // Ejemplo: "login", "dashboard", "profile"

        switch ($route) {
            case 'login':
            case 'register':
            case 'password/reset':
            case 'welcome':
            case 'profile':
                // No hacer nada, permitir el acceso a estas páginas sin redirección
                return $next($request);


            default:
                // Si el usuario no está autenticado, redirigir al login
                if (!Auth::check()) {
                    Session::flush(); // Limpia la sesión por seguridad
                    Auth::logout(); // Cierra la sesión
                    return redirect()->route('login')->with('error', 'Tu sesión ha expirado, inicia sesión nuevamente.');
                }
                break;
        }

        return $next($request);
    }
}
