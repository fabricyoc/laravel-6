<?php

namespace App\Http\Middleware;

use Closure;

class CheckNumber
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
        // dd($request->all());
        $n1 = $request->n1;
        $n2 = $request->n2;
        if ($n1 < 0 || $n2 < 0) 
        {
            return redirect('/');
        }

        return $next($request);
    }
}
