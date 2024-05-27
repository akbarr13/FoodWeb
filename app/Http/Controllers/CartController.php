<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{


    public function showCart(Request $request)
    {
        $user = $request->user();
        $items = Cart::where('user_id', $user->id)->with('product')->simplePaginate(4);
        $total_pembayaran = 0;
        foreach ($items as $item) {
            $subtotal = $item->qty * $item->product->price;
            $total_pembayaran += $subtotal;
        }
        return view('cart', [
            'items' => $items,
            'total_pembayaran' => $total_pembayaran
        ]);
    }
    public function add(Request $request, $id)
    {
        $cart = Cart::where('product_id', $id)
            ->where('user_id', $request->user()->id)
            ->first();

        if ($cart) {
            $cart->increment('qty', 1);
        } else {
            Cart::create([
                'user_id' => $request->user()->id,
                'product_id' => $id,
                'qty' => 1
            ]);
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::where('product_id', $id)
            ->where('user_id', $request->user()->id)
            ->first();



        if ($cart) {

            if ($request->has('qty')) {
                $quantity = $request->input('qty');
                if ($request->has('action')) {
                    $action = $request->input('action');
                    if ($action == 'increment') {
                        $cart->increment('qty', $quantity);
                        $cart->save();
                    } elseif ($action == 'decrement') {
                        // Ensure quantity does not go below 1
                        if ($cart->qty > $quantity) {
                            $cart->decrement('qty', $quantity);
                        } else {
                            $cart->qty = 1;
                            $cart->save();
                        }
                    }
                }
            } else {
            }
        }
        return redirect()->back();
    }

    public function remove($id)
    {
        $cart = Cart::where('id', $id)->delete();
        return redirect()->back();
    }
}
