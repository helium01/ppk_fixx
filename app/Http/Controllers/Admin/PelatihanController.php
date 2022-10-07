<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_pelatihan;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pelatihans = new tb_pelatihan();
        $pelatihans = $pelatihans->get();
        return view('pages.pelatihan.index', ['pelatihans' => $pelatihans]);
    }

    public function create()
    {
        return view('pages.pelatihan.create');
    }

    public function store(Request $request)
    {
        $pelatihan = new tb_pelatihan();
        $pelatihan->nama_kegiatan = $request->nama_kegiatan;
        $pelatihan->tanggal = $request->tanggal;
        $pelatihan->jenis_kegiatan = $request->jenis_kegiatan;
        $pelatihan->deskripsi = $request->deskripsi;
        if($request->hasFile('foto')){

            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $galeri->foto =$request->file('foto')->getClientOriginalName();
            $galeri->save();
        }
        $pelatihan->save();
        return redirect()->route('pelatihan.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pelatihan = tb_pelatihan::find($id);
        return view('pages.pelatihan.edit', ['pelatihan' => $pelatihan]);
    }

    public function update(Request $request, $id)
    {
        $pelatihan = tb_pelatihan::find($id);
        $pelatihan->nama_kegiatan = isset($request->nama_kegiatan) ? $request->nama_kegiatan : $pelatihan->nama_kegiatan;
        $pelatihan->tanggal = isset($request->tanggal) ? $request->tanggal : $pelatihan->tanggal;
        $pelatihan->jenis_kegiatan = isset($request->jenis_kegiatan) ? $request->jenis_kegiatan : $pelatihan->jenis_kegiatan;
        $pelatihan->deskripsi = isset($request->deskripsi) ? $request->deskripsi : $pelatihan->deskripsi;
        $pelatihan->foto = isset($request->foto) ? $request->foto : $pelatihan->foto;
        $pelatihan->save();
        return redirect()->route('pelatihan.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $pelatihan = tb_pelatihan::find($id);
        $pelatihan->delete();
        return redirect()->route('pelatihan.index')->with('message', 'Data berhasil dihapus');
    }
}