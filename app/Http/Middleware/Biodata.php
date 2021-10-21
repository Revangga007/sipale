<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Biodata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('biodata') == false) {
            return $next($request);
        }
        return redirect()->route('pengguna.diagnosa.index');
    }
}
