<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JodohZodiakController extends Controller
{
    public function input()
    {
        return view('jodohzodiak');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'gender' => 'required',
           'zodiakanda' => 'required',
           'zodiakpasangan' => 'required'
        ]);

        return view('prosesjodohzodiak',['data' => $request]);
    }
}