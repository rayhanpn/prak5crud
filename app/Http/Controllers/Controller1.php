<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function tampil1()
    {
        return view('tampil1');
    }
    public function create()
    {
        return view('create');
    }

    public function update($nim)
    {
        if ($data = Mahasiswa::find($nim)) {
            return view('update', ['data' => $data]);
        } else return redirect('/read');
    }

    public function edit(Request $request)
    {
        
        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        if ($data = Mahasiswa::find($request->nim)) {
            $data->nama = @$request->nama;
            $data->foto = $pathFoto;
            $data->alamat = @$request->alamat;
            $data->umur = @$request->umur;
            $data->email = @$request->email;
            $data->updated_at = date('Y-m-d H:i:s');
            $data->save();
            echo "alert('data berhasil diupdate');";
            return redirect('/read')->with('pesan', 'Data dengan NIM : ' . $request->nim . ' berhasil diupdate');
        } else {
            return redirect('/read')->with('pesan', 'Data tidak ditemukan/gagal update');
        }
    }

    public function save(Request $request)
    {
        $validationData = $request->validate([
            'nim' => 'required|regex:/^G\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
            'nama' => 'required|string|max:50',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'umur' => 'required|integer|between:1,100',
            'alamat' => 'required|min:6',
            'email' => 'required|email'
        ]);

        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $model = new Mahasiswa;
        $model->create([
            'nim' => @$request->nim,
            'nama' => @$request->nama,
            'foto' => $pathFoto,
            'alamat' => @$request->alamat,
            'umur' => @$request->umur,
            'email' => @$request->email,
            'created_at' => now(),
        ]);

        return view('view', ['data' => $request->all()]);
    }



    public function read()
    {
        $model = new Mahasiswa();
        $dataAll = $model->all();
        return view('read', ['dataAll' => $dataAll]);
    }

    public function delete($nim)
    {
        if ($data = Mahasiswa::find($nim)) {
            $data->delete();
        } else {
            return redirect('/read')->with('pesan', 'Data NIM : ' . @$nim . ' tidak ditemukan');
        }

        return redirect('/read')->with('pesan', 'Data NIM : ' . @$nim . ' Berhasil dihapus');
    }

    public function tampilkan(Request $request)
    {
        $foto = $request->file('foto');
        $pathFoto = $foto->store('foto', 'public');

        $model = new Mahasiswa();
        $model::insert(['nim' => @$request->nim, 'nama' => @$request->nama,'foto'=>$pathFoto, 'alamat' => @$request->alamat, 'created_at' => date("Y-m-d H:i:s")]);

        $dataAll = $model->all();
        return view('tampil2', ['data' => $request->all(), 'dataAll' => @$dataAll]);
    }

    public function logout()
    {
        return view('logout');
    }
}
