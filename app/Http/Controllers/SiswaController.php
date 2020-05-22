<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SiswaController extends Controller
{
    public function index()
    {
        $data_siswa = \App\Siswa::all();
        return view('siswa', ['data_siswa' => $data_siswa]);
    }

    public function edit($id)
    {
        $siswa = \App\Siswa::find($id);
        return view('edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_depan' => 'required|min:4|unique:siswa',
        ]);

        $siswa =\App\Siswa::find($id);
        $siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data Berhasil di update');
    }

    public function mingguan()
    {
        $data_siswa = \App\Siswa::all();
        return view('halmingguan', ['data_siswa' => $data_siswa]);
    }
}
