<?php

namespace App\Http\Controllers;

use App\Models\Shopping_cart;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PDFController extends Controller
{
    public function generatePDF($order_id)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Vous devez être connecté pour commander'], 401);
        }
        $user_cart = DB::table('shopping_carts')
            ->where('user_id', auth()->id())
            ->first();

        if (!$user_cart) {
            $user_cart = Shopping_cart::create(['user_id' => auth()->id()]);
        }
        $data = DB::table('boardgames')
            ->join('put_on', 'put_on.boardgame_id', '=', 'boardgames.id')
            ->where('put_on.shopping_cart_id', '=', $user_cart->id)
            ->get();

        $viewData = [
            'data' => $data,
            'start_date' => '',
            'end_date' => '',
            'client_name' => Auth::user()->name,
        ];

        if (!$data->isEmpty()) {
            $viewData['start_date'] = "test";//$data[0]->start_date;
            $viewData['end_date'] = "test2";//$data[0]->end_date;
        }

        $pdf = PDF::loadView('pdf', $viewData);

        Storage::disk('public')->put('/orders/'.Auth::user()->id.'.pdf', $pdf->download()->content());
        return $pdf->download(Auth::user()->id.'.pdf');
    }
}
