<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    // Menampilkan daftar pesanan
    public function index()
    {
        $orders = Order::orderBy('order_date', 'desc')->paginate(10);
        return view('pages.admin.orders', compact('orders'));
    }

    // Form tambah pesanan
    public function create()
    {
        return view('pages.admin.createorders');
    }

    // Simpan pesanan baru
    public function store(Request $request)
    {
        $request->validate([
            'order_code' => 'required|unique:orders',
            'customer_name' => 'required',
            'alamat' => 'required',
            'product_name' => 'required',
            'lama_sewa' => 'required',
            'biaya_pengiriman' => 'required',
            'order_date' => 'required|date',
            'status' => 'required',
            'total' => 'required|numeric',
            'no_hp' => 'required|digits_between:12,13|numeric',
        ]);

        $subtotal = 0; // nanti bisa otomatis dari harga produk kalau sudah ada relasi
        $total = $subtotal + $request->biaya_pengiriman;

        Order::create([
            'nama_pelanggan' => $request->nama_pelanggan,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'nama_produk' => $request->nama_produk,
            'lama_sewa' => $request->lama_sewa,
            'biaya_pengiriman' => $request->biaya_pengiriman,
            'status' => $request->status,
            'subtotal' => $subtotal,
            'total' => $total,
        ]);

        return redirect()->route('orders.index')->with('success', 'Pesanan berhasil ditambahkan!');
    }
}
