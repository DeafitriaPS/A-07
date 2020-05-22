<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariShioController extends Controller
{
    public function input()
    {
        return view('inputshio');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'tanggal' => 'required|numeric'
        ]);

        return view('prosesshio',['data' => $request]);
    }
}