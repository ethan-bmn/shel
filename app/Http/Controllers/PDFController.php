<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function generatePDF($order_id)
    {
        if (!Auth::check()) {
            return response()->json(['message' => 'Vous devez être connecté pour commander'], 401);
        }

        $data = DB::table('shopping_carts')
            ->where('user_id', auth()->id())
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
        return $pdf->download('order-lists.pdf');
    }
}
