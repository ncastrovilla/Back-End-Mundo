<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!$request->has("api_key")) {
            return response()->json([
                'status' => 401,
                'message' => 'Acceso no autorizado',
            ], 401);
        }

        if($request->has("api_key")){
            $api_key = "9deb9beb54f1";
            if($request->input("api_key") != $api_key){
                return response()->json([
                    'status' => 401,
                    'message' => 'Acceso no autorizado',
                ], 401);
            }
        }

        return $next($request);
    }
}
