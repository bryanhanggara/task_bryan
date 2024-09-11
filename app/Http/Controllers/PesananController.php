<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index() {
        $orders = Pesanan::all();
        return view('pages.order.index', compact('orders'));
    }

    public function create(){
        return view('pages.order.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_pemesan' => 'required',
            'produk' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        $order = new Pesanan();
        $order->nama_pemesan = $request->nama_pemesan;
        $order->produk = $request->produk;
        $order->harga = $request->harga;
        $order->jumlah = $request->jumlah;
        $order->total = $request->harga * $request->jumlah;
        $order->save();

        return redirect()->route('order.index');
    }
}
