<?php

namespace App\Http\Controllers;

use App\Models\Boardgame;
use App\Models\Shopping_cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;


class ShoppingCartController extends Controller {

    public function __construct() {
        $this->middleware = 'auth';
    }
     /**
     * Display the specified resource.
     */
    public function show(){
        if (!Auth::user()) {
            return response()->json(['message' => 'Vous devez être connecté pour accéder au panier'], 401);
        }
        $user_cart = DB::table('shopping_carts')
            ->where('user_id', auth()->id())
            ->first();

        if (!$user_cart) {
            $user_cart = Shopping_cart::create(['user_id' => auth()->id()]);
        }

        $content = DB::table('boardgames')
            ->join('put_on', 'put_on.boardgame_id', '=', 'boardgames.id')
            ->where('put_on.shopping_cart_id', '=', $user_cart->id)
            ->get();

        return Inertia::render('Panier', [
            'content' => $content
        ]);
    }

     /**
     * add a game to a cart
     */
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
