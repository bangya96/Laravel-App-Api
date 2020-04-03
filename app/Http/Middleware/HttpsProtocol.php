<?php
/**
 * Created by PhpStorm.
 * User: BangYa
 * Date: 22/3/2020
 * Time: 6:29 PM
 */
namespace App\Http\Middleware;

use Closure;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        if (!$request->secure()) {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
