<?php

namespace App\Http\Middleware;

use Closure;

class TypeUserCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next)
    {
        if($request->user()->typeUser == 'common'){
            return (403, "Acesso não autorizado");
        }

        return $next($request);

    }
}
