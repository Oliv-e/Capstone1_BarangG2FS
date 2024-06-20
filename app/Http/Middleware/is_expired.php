<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class is_expired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $session = session()->get('cart');

        if ($session === null) {
            return $next($request);
        }
        $tglDimasukkan = [];
        foreach ($session as $item) {
            $tglDimasukkan = Carbon::createFromTimestamp($item['tgl_dimasukkan']->getTimestamp());
            $now = Carbon::now();
            if ($now->diffInHours($tglDimasukkan) > 6) {
                session()->forget('cart');
            }
        }
        return $next($request);
    }
}
