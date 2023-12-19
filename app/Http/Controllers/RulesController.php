<?php

namespace App\Http\Controllers;

use App\Models\Rules;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    //
    public function index()
    {
        $rules = Rules::all();
        return response()->json(['data' => $rules]);
    }

    public function rulesnya(Request $request)
    {
        $request->validate([
            'name_rules' => 'required',
        ]);

        $rules = new Rules;
        //$barang->nama_barang = $request->input('nama_barang');
        $rules->name_rules = $request->input('name_rules');  
        $rules->save();

        return response()->json(['message' => 'Data rules berhasil ditambahkan'], 201);
    }
}
