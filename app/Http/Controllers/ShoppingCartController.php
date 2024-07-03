<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller {

    public function __construct() {
        $this->middleware = 'auth';
    }

    public function addToCart(Request $request, $id) {
        if (!Auth::user()) {
            return response()->json(['message' => 'Vous devez être connecté pour ajouter un jeu au panier'], 401);
        }
        $user_cart = DB::table('shopping_carts')
            ->where('user_id', auth()->id())
            ->first();
        $put_on = DB::table('put_on')
            ->where('boardgame_id', $id)
            ->where('shopping_cart_id', $user_cart->id);
        if ($put_on->exists()) {
            $put_on->delete();
        } else {
            $shopping_cart = DB::table('shopping_carts')
                ->where('user_id', auth()->id())
                ->first();
            if (!$shopping_cart) {
                $shopping_cart = DB::table('shopping_carts')
                    ->insert(['user_id' => auth()->id()]);
            }
            DB::table('put_on')
                ->insert(['shopping_cart_id' => $shopping_cart->id, 'boardgame_id' => $id]);
        }
    }
}
