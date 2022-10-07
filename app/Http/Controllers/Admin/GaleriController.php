<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $galeris = new tb_galeri();
        $galeris = $galeris->get();
        return view('pages.galeri.index', ['galeris' => $galeris]);
    }

    public function create()
    {
        return view('pages.galeri.create');
    }

    public function store(Request $request)
    {
        // $galeri = new tb_galeri();
        // $galeri->foto = $request->foto;
        // $galeri->deskripsi = $request->deskripsi;
        // $galeri->save();
        $galeri=tb_galeri::create($request->all());
        if($request->hasFile('foto')){

            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $galeri->foto =$request->file('foto')->getClientOriginalName();
            $galeri->save();
        }

     

        return redirect()->route('galeri.index')->with('message', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $galeri = tb_galeri::find($id);
        return view('pages.galeri.edit', ['galeri' => $galeri]);
    }

    public function update(Request $request, $id)
    {
        // $galeri = tb_galeri::find($id);
        // $galeri->foto = isset($request->foto) ? $request->foto : $galeri->foto;
        // $galeri->deskripsi = isset($request->deskripsi) ? $request->deskripsi : $galeri->deskripsi;
        // $galeri->save();

        $id=tb_galeri::find($id);
        $id->deskripsi=$request->deskripsi;
        if($request->hasFile('foto')){
            $id->delete_image();
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $id->foto =$request->file('foto')->getClientOriginalName();
        }else{
            unset($id['foto']);
        }
        $id->save();

    

        return redirect()->route('galeri.index')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $galeri = tb_galeri::find($id);
        $galeri->delete();
        return redirect()->route('galeri.index')->with('message', 'Data berhasil dihapus');
    }
}