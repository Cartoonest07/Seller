<?php

namespace App\Http\Controllers;

use App\Models\Data_Pemesanan;
use Illuminate\Http\Request;

class DataPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_pemesanan = Data_Pemesanan::paginate(10);
        return response()->json([
            'data' => $data_pemesanan
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_pemesanan = Data_Pemesanan::create([
            'nama_produk_pemesanan' => $request-> nama_produk_pemesanan,
            'harga_produk_pemesanan' => $request-> harga_produk_pemesanan,
            'tanggal_pemesanan' => $request-> tanggal_pemesanan,
            'status_pemesanan' => $request-> status_pemesanan,
            'username' => $request-> username,
            'nama_customer' => $request-> nama_customer,
            'alamat_customer' => $request-> alamat_customer,
            'telp_customer' => $request-> telp_customer
        ]);
        return response()->json([
            'data' => $data_pemesanan
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Data_Pemesanan $data_Pemesanan)
    {
        return response()->json([
            'data' => $data_pemesanan
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Data_Pemesanan $data_Pemesanan)
    {
        $data_pemesanan->nama_produk_pemesanan = $request-> nama_produk_pemesanan;
        $data_pemesanan->harga_produk_pemesanan = $request-> harga_produk_pemesanan;
        $data_pemesanan->tanggal_pemesanan = $request-> tanggal_pemesanan;
        $data_pemesanan->status_pemesanan = $request-> status_pemesanan;
        $data_pemesanan->username = $request-> username;
        $data_pemesanan->nama_customer = $request-> nama_customer;
        $data_pemesanan->alamat_customer = $request-> alamat_customer;
        $data_pemesanan->telp_customer = $request-> telp_customer;
        $data_pemesanan->save();

        return response()->json([
            'data' => $data_pemesanan
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data_Pemesanan $data_Pemesanan)
    {
        $data_pemesanan->delete();
        return response()->json([
            'message' => 'data_pemesanan deleted'
        ], 204);
    }
}
