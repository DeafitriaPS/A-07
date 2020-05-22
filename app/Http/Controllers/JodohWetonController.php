<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JodohWetonController extends Controller
{
    public function input()
    {
        return view('weton');
    }

    public function proses(Request $request)
    {
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'gender' => 'required',
           'hari' => 'required',
           'weton' => 'required',
           'wetonpasangan' => 'required',
           'haripasangan' => 'required'
        ]);

        return view('prosesweton',['data' => $request]);
    }
}