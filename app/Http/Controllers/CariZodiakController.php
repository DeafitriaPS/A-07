<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariZodiakController extends Controller
{
    public function input()
    {
        return view('input');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'bulan' => 'required',
           'tanggal' => 'required|numeric'
        ]);

        return view('proses',['data' => $request]);
    }
}