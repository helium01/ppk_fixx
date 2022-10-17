<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_tentang;
use App\Models\tb_kontak;
use App\Models\tb_profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tentangs = new tb_tentang();
        $hasil=tb_tentang::count();
        $tentangs = $tentangs->get();
        $kontak=tb_kontak::all();
        $profil=tb_profil::all();
        // dd($hasil);
        return view('pages.tentang.index', ['tentangs' => $tentangs,'hasil'=>$hasil,'kontak'=>$kontak,'profil'=>$profil]);
    }

    public function create()
    {
        return view('pages.tentang.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $tentang = new tb_tentang();
        $tentang->nama = $request->nama;
        $tentang->alamat = $request->alamat;
        $tentang->no_telp = $request->no_telp;
        $tentang->email = $request->email;
        $tentang->deskripsi = $request->deskripsi;
        $tentang->kode_pos = $request->kode_pos;
        if($request->hasFile('logo')){

            $request->file('logo')->move('foto/', $request->file('logo')->getClientOriginalName());
            $tentang->logo =$request->file('logo')->getClientOriginalName();
        }
        // dd($tentang);
        $tentang->save();
        return redirect()->route('tentang.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $tentang = tb_tentang::find($id);
        return view('pages.tentang.edit', ['tentang' => $tentang]);
    }

    public function update(Request $request, $id)
    {
        $tentang = tb_tentang::find($id);
        $tentang->nama = isset($request->nama) ? $request->nama : $tentang->nama;
        $tentang->alamat = isset($request->alamat) ? $request->alamat : $tentang->alamat;
        $tentang->no_telp = isset($request->no_telp) ? $request->no_telp : $tentang->jenis_kegiatan;
        $tentang->email = isset($request->email) ? $request->email : $tentang->email;
        $tentang->deskripsi = isset($request->deskripsi) ? $request->deskripsi : $tentang->deskripsi;
        $tentang->kode_pos = isset($request->kode_pos) ? $request->kode_pos : $tentang->kode_pos;
        if($request->hasFile('logo')){

            $request->file('logo')->move('foto/', $request->file('logo')->getClientOriginalName());
            $tentang->logo =$request->file('logo')->getClientOriginalName();
        }else{
            unset($tentang['logo']);
        }
        $tentang->save();
        return redirect()->route('tentang.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $tentang = tb_tentang::find($id);
        $tentang->delete();
        return redirect()->route('tentang.index')->with('message', 'Data berhasil dihapus');
    }
}