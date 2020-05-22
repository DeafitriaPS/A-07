<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = \App\User::all();
        return view('profil', ['profil' => $profil]);
    }

    public function edit($id)
    {
        $editprof = \App\User::find($email);
        return view('editprofil', ['editprof' => $editprof]);
    }

    public function update(Request $request, $email)
    {
        $this->validate($request, [
            'nama' => 'required|min:4',
            
        ]);

        $siswa =\App\User::find($email);
        $siswa->update($request->all());
        return redirect('/profil')->with('sukses', 'Data Berhasil di update');
    }
}
