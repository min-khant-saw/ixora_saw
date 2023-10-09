<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $products = User::find($request->user()->id)
            ->with('cartProduct')
            ->get();
        $myCart = [];
        foreach ($products as $product) {
            foreach ($product->cartProduct as $cart) {
                array_push($myCart, $cart);
            }
        }

        $totalPrice = 0;

        foreach ($myCart as $value) {
            $itemPrice = $value->price;
            $discountPercent = $value->discount;

            if ($discountPercent > 0) {
                // Calculate the discount amount
                $discountAmount = $itemPrice * ($discountPercent / 100);

                // Calculate the discounted price
                $itemPrice -= $discountAmount;
            }

            // Add the item's price to the total
            $totalPrice += $itemPrice;
        }

        return view('pages.cart.cart', [
            'products' => $myCart,
            'total' => $totalPrice,
        ]);
    }

    public function add($id)
    {
        $user = User::find(auth()->id());

        $user->cartProduct()->attach($id);

        return back();
    }

    public function delete($id)
    {
        // $user = User::find(auth()->id());
        // $user->cartProduct()->detach($id);

        DB::table('product_user')
            ->where('id', $id)
            ->delete($id);

        return back();
    }
}
