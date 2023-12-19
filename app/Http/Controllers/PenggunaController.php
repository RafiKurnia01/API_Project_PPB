<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    //
    public function index()
    {
        $pengguna = Pengguna::all();
        return response()->json(['data' => $pengguna]);
    }

    public function penggunanya(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'jenkel' => 'required',
            'usia' => 'required',
            'sekolah' => 'required',
            'id_rule' => 'required',
        ]);

        $pengguna = new Pengguna;
        //$barang->nama_barang = $request->input('nama_barang');
        $pengguna->username = $request->input('username');  
        $pengguna->password = $request->input('password');
        $pengguna->jenkel = $request->input('jenkel');
        $pengguna->usia = $request->input('usia');
        $pengguna->sekolah = $request->input('sekolah');
        $pengguna->id_rule = $request->input('id_rule');
        $pengguna->save();

        return response()->json(['message' => 'Data pengguna berhasil ditambahkan'], 201);
    }
}
