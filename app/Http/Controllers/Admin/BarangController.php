<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tb_barang;
use App\Models\tb_kategori;
use App\Models\tb_pedagang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
    }
  public function index()
  {
    $barangs = new tb_barang();
    $barangs = $barangs->leftJoin('tb_kategoris', 'tb_kategoris.id', '=', 'tb_barangs.id_kategori');
    $barangs = $barangs->leftJoin('tb_pedagangs', 'tb_pedagangs.id', '=', 'tb_barangs.id_pedagang');
    $barangs = $barangs->select('tb_barangs.*', 'tb_kategoris.nama_kategori as nama_kategori', 'tb_pedagangs.nama as nama');
    $barangs = $barangs->get();
    return view('pages.barang.index', ['barangs' => $barangs]);
  }

  public function create()
  {
    $kategori = tb_kategori::all();
    $pedagang = tb_pedagang::all();
    return view('pages.barang.create')->with(['kategori' => $kategori, 'pedagang' => $pedagang]);
  }

  public function store(Request $request)
  {
    // dd($request);
    $barang = new tb_barang();
    $barang->id_kategori = $request->id_kategori;
    $barang->id_pedagang = $request->id_pedagang;
    $barang->harga = $request->harga;
    $barang->deskripsi = $request->deskripsi;
    $barang->berat = $request->berat;
    if($request->hasFile('foto')){

      $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
      $barang->foto =$request->file('foto')->getClientOriginalName();
  }
    $barang->save();
    return redirect()->route('barang.index')->with('message', 'Data berhasil ditambahkan');
  }

  public function edit($id)
  {
    $barang = tb_barang::find($id);
    $kategori = tb_kategori::all();
    $pedagang = tb_pedagang::all();
    return view('pages.barang.edit', ['barang' => $barang, 'kategori' => $kategori, 'pedagang' => $pedagang]);
  }

  public function update(Request $request, $id)
  {
    $barang = tb_barang::find($id);
    $barang->id_kategori = isset($request->id_kategori) ? $request->id_kategori : $barang->id_kategori;
    $barang->id_pedagang = isset($request->id_pedagang) ? $request->id_pedagang : $barang->id_pedagang;
    $barang->harga = isset($request->harga) ? $request->harga : $barang->harga;
    $barang->deskripsi = isset($request->deskripsi) ? $request->deskripsi : $barang->deskripsi;
    $barang->berat = isset($request->berat) ? $request->berat : $barang->berat;
    if($request->hasFile('foto')){
      // $barang->delete_image();
      $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
      $barang->foto =$request->file('foto')->getClientOriginalName();
  }else{
      unset($barang['foto']);
  }
    $barang->save();
    return redirect()->route('barang.index')->with('message', 'Data berhasil diubah');
  }

  public function delete($id)
  {
    $barang = tb_barang::find($id);
    $barang->delete();
    return redirect()->route('barang.index')->with('message', 'Data berhasil dihapus');
  }
}