<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_kontak;
use App\Models\tb_tentang;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kontaks = new tb_kontak();
        $kontaks = $kontaks->leftJoin('tb_tentangs', 'tb_tentangs.id', '=', 'tb_kontaks.id_tentang');
        $kontaks = $kontaks->select('tb_kontaks.*', 'tb_tentangs.nama as nama');
        $kontaks = $kontaks->get();
        return view('pages.kontak.index', ['kontaks' => $kontaks]);
    }

    public function create()
    {
        $tentang = tb_tentang::all();
        return view('pages.kontak.create')->with(['tentang' => $tentang]);
    }

    public function store(Request $request)
    {
        $kontak = new tb_kontak();
        $kontak->id_tentang = $request->id_tentang;
        $kontak->ak_instagram = $request->ak_instagram;
        $kontak->ak_facebook = $request->ak_facebook;
        $kontak->ak_youtube = $request->ak_youtube;
        $kontak->save();
        return redirect()->route('kontak.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kontak = tb_kontak::find($id);
        $tentang = tb_tentang::all();
        return view('pages.kontak.edit', ['kontak' => $kontak, 'tentang' => $tentang]);
    }

    public function update(Request $request, $id)
    {
        $kontak = tb_kontak::find($id);
        $kontak->id_tentang = isset($request->id_tentang) ? $request->id_tentang : $kontak->id_tentang;
        $kontak->ak_instagram = isset($request->ak_instagram) ? $request->ak_instagram : $kontak->ak_instagram;
        $kontak->ak_facebook = isset($request->ak_facebook) ? $request->ak_facebook : $kontak->ak_facebook;
        $kontak->ak_youtube = isset($request->ak_youtube) ? $request->ak_youtube : $kontak->ak_youtube;
        $kontak->save();
        return redirect()->route('kontak.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $kontak = tb_kontak::find($id);
        $kontak->delete();
        return redirect()->route('kontak.index')->with('message', 'Data berhasil dihapus');
    }
}