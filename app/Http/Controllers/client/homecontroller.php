<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\tb_barang;
use App\Models\tb_kategori;
use App\Models\tb_pedagang;
use App\Models\tb_galeri;
use App\Models\tb_profil;
use App\Models\tb_kontak;
use Illuminate\Http\Request;


class homecontroller extends Controller
{
    public function __autoload(){
        $produk=tb_barang::latest()->get();
        $galeri=tb_galeri::latest()->get();
        $profil=tb_profil::latest()->get();
        // $kontak=tb_kontak::lates()->get();
        return view('client.content.index',compact('produk','galeri','profil'));
    }
   
    public function home(){
        $produk=tb_barang::latest()->get();
        $galeri=tb_galeri::latest()->get();
        $profil=tb_profil::latest()->get();
        $kontak=tb_kontak::latest()->get();
        return view('client.content.index',compact('produk','galeri','profil','kontak'));
    }
}
