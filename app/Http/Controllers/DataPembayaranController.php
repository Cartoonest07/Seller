<?php

namespace App\Http\Controllers;

use App\Models\Data_Pembayaran;
use Illuminate\Http\Request;

class DataPembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pembayaran = Data_Pembayaran::paginate(10);
        return response()->json([
            'data' => $data_pembayaran
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_pembayaran = Data_Pembayaran::create([
            'id_barang' =>$request->id_barang,
            'total_harga' =>$request->total_harga,
            'virtual_account' =>$request->virtual_account,
            'status_pembayaran' =>$request->status_pembayaran,
            'id_pemesanan' =>$request->id_pemesanan,
            'harga_produk_pemesanan' =>$request->harga_produk_pemesanan
        ]);
        return response()->json([
            'data' => $data__pembayaran 
        ]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Data_Pembayaran $data_Pembayaran)
    {
        return response()->json([
            'data' => $data__pembayaran 
        ]); 
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data_Pembayaran $data_Pembayaran)
    {
        $data__pembayaran->id_barang = $request->id_barang;
        $data__pembayaran->total_harga = $request->total_harga;
        $data__pembayaran->virtual_account = $request->virtual_account;
        $data__pembayaran->status_pembayaran = $request->status_pembayaran;
        $data__pembayaran->id_pemesanan = $request->id_pemesanan;
        $data__pembayaran->harga_produk_pemesanan = $request->harga_produk_pemesanan;
        $data__pembayaran->save();

        return response()->json([
            'data' => $data__pembayaran 
        ]); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data_Pembayaran $data_Pembayaran)
    {
        $data_pembayaran->delete();
        return response()->json([
            'message' => 'data_pembayaran deleted'
        ], 204);
    }
}
