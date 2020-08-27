<?php

namespace App\Http\Middleware;

use Closure;

class CheckFileSize
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->file('file')->getSize() > 100 * 1024 * 1024) {
            return abort(406);
        }
        return $next($request);
    }
}
