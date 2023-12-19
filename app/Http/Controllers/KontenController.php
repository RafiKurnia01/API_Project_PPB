<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    public function index()
    {
        $konten = Konten::all();
        return response()->json(['data' => $konten]);
    }

    public function kontennya(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'id_pengguna' => 'required',
            'id_kategori' => 'required',
        ]);

        $konten = new Konten;
        $konten->judul = $request->input('judul');  
        $konten->isi = $request->input('isi');
        $konten->id_pengguna = $request->input('id_pengguna');
        $konten->id_kategori = $request->input('id_kategori');
        $konten->save();

        return response()->json(['message' => 'Data konten berhasil ditambahkan'], 201);
    }

    public function data($id_kategori){
        $konten = Konten::where('id_kategori', $id_kategori)->get();
        return response()->json(['data' => $konten]);
    }
}