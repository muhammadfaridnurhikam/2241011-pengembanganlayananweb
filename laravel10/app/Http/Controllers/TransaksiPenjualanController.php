<?php
namespace App\Http\Controllers;

use App\Models\TransaksiPenjualan;
use Illuminate\Http\Request;

class TransaksiPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = TransaksiPenjualan::all();
        return view('transaksi-penjualan.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transaksi-penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
        ]);

        $transaksi = new TransaksiPenjualan();
        $transaksi->produk_id = $request->produk_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;

        $transaksi->save();

        return redirect()->route('transaksi-penjualans.index')->with('success', 'Transaksi penjualan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = TransaksiPenjualan::findOrFail($id);
        return view('transaksi-penjualan.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = TransaksiPenjualan::findOrFail($id);
        return view('transaksi-penjualan.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer',
            'total_harga' => 'required|numeric',
            'tanggal_transaksi' => 'required|date',
        ]);

        $transaksi = TransaksiPenjualan::findOrFail($id);
        $transaksi->produk_id = $request->produk_id;
        $transaksi->jumlah = $request->jumlah;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->tanggal_transaksi = $request->tanggal_transaksi;

        $transaksi->save();

        return redirect()->route('transaksi-penjualans.index')->with('success', 'Transaksi penjualan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = TransaksiPenjualan::findOrFail($id);
        $transaksi->delete();

        return redirect()->route('transaksi-penjualans.index')->with('success', 'Transaksi penjualan berhasil dihapus.');
    }
}
