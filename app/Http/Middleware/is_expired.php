<?php

namespace App\Http\Middleware;

use App\Models\Stock;
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
        if ($request->isMethod('destroy') && $request->session()->isStarted()) {
            $this->restoreStockQuantities();
        }

        return $next($request);
    }
    protected function restoreStockQuantities()
    {
        // Get the cart items from the session
        $cart = Session::get('cart', []);

        // Group the cart items by id_barang
        $groupedCart = array_reduce($cart, function ($result, $item) {
            $result[$item['id_barang']] = ($result[$item['id_barang']] ?? 0) + $item['quantity'];
            return $result;
        }, []);

        // Loop through the grouped cart items and restore the stock quantities
        foreach ($groupedCart as $id_barang => $quantity) {
            $stock = Stock::where('id_barang', $id_barang)->first();
            if ($stock) {
                $stock->increment('stock', $quantity);
            }
        }
    }
}
