<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_pedagang;
use Illuminate\Http\Request;

class PedagangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pedagangs = new tb_pedagang();
        $pedagangs = $pedagangs->get();
        return view('pages.pedagang.index', ['pedagangs' => $pedagangs]);
    }

    public function create()
    {
        return view('pages.pedagang.create');
    }

    public function store(Request $request)
    {
        $pedagang = new tb_pedagang();
        $pedagang->nama = $request->nama;
        $pedagang->no_telp = $request->no_telp;
        $pedagang->email = $request->email;
        $pedagang->alamat = $request->alamat;
        $pedagang->sosial_media = $request->sosial_media;
        $pedagang->save();
        return redirect()->route('pedagang.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $pedagang = tb_pedagang::find($id);
        return view('pages.pedagang.edit', ['pedagang' => $pedagang]);
    }

    public function update(Request $request, $id)
    {
        $pedagang = tb_pedagang::find($id);
        $pedagang->nama = isset($request->nama) ? $request->nama : $pedagang->nama;
        $pedagang->no_telp = isset($request->no_telp) ? $request->no_telp : $pedagang->no_telp;
        $pedagang->email = isset($request->email) ? $request->email : $pedagang->email;
        $pedagang->alamat = isset($request->alamat) ? $request->alamat : $pedagang->alamat;
        $pedagang->sosial_media = isset($request->sosial_media) ? $request->sosial_media : $pedagang->sosial_media;
        $pedagang->save();
        return redirect()->route('pedagang.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $pedagang = tb_pedagang::find($id);
        $pedagang->delete();
        return redirect()->route('pedagang.index')->with('message', 'Data berhasil dihapus');
    }
}