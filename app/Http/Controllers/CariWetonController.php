<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariWetonController extends Controller
{
    public function input()
    {
        return view('inputweton');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'bulan' => 'required',
           'tanggal' => 'required|numeric',
           'tahun' => 'required'
        ]);

        return view('prosespilihweton',['data' => $request]);
    }
}