<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kategoris = new tb_kategori();
        $kategoris = $kategoris->get();
        return view('pages.kategori.index', ['kategoris' => $kategoris]);
    }

    public function create()
    {
        return view('pages.kategori.create');
    }

    public function store(Request $request)
    {
        $kategori = new tb_kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->deskripsi = $request->deskripsi;
        $kategori->k_utama = $request->k_utama;
        if($request->hasFile('foto')){

            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $kategori->foto =$request->file('foto')->getClientOriginalName();
        }
        $kategori->save();
        return redirect()->route('kategori.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kategori = tb_kategori::find($id);
        return view('pages.kategori.edit', ['kategori' => $kategori]);
    }

    public function update(Request $request, $id)
    {
        $kategori = tb_kategori::find($id);
        $kategori->nama_kategori = isset($request->nama_kategori) ? $request->nama_kategori : $kategori->nama_kategori;
        $kategori->deskripsi = isset($request->deskripsi) ? $request->deskripsi : $kategori->deskripsi;
        if($request->hasFile('foto')){

            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $kategori->foto =$request->file('foto')->getClientOriginalName();
        }
        else{
            unset($kategori['foto']);
        }
        $kategori->save();
        return redirect()->route('kategori.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $kategori = tb_kategori::find($id);
        $kategori->delete();
        return redirect()->route('kategori.index')->with('message', 'Data berhasil dihapus');
    }
}