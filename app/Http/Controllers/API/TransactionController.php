<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $product = Transaction::with(['details.products'])->find($id);
        if ($product)
            return ResponseFormatter::success($product, 'Transaksi Berhasil Diambil');
        else
            return ResponseFormatter::error(null, 'Data Transaksi Tidak Ada', 404);
    }
    //
}
