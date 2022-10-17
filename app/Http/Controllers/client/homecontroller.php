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
use Illuminate\Support\Facades\DB;


class homecontroller extends Controller
{
    // public function __autoload(){
    //     $produk=tb_barang::latest()->get();
    //     $galeri=tb_galeri::latest()->get();
    //     $profil=tb_profil::latest()->get();
    //     // $kontak=tb_kontak::lates()->get();
    //     return view('client.content.index',compact('produk','galeri','profil'));
    // }
   
    public function home(){
        $profil= DB::table('tb_profils')
                    ->join('tb_tentangs','tb_profils.id_tentang','=','tb_tentangs.id')
                    ->select('tb_profils.*','tb_tentangs.*')
                    ->get();
        $kategori=tb_kategori::all();
        $galery=tb_galeri::all();
        $kontak= DB::table('tb_kontaks')
                    ->join('tb_tentangs','tb_kontaks.id_tentang','=','tb_tentangs.id')
                    ->select('tb_kontaks.*','tb_tentangs.*')
                    ->get();
        // dd($hasil);
        return view('client.content.index',compact('profil','kategori','galery','kontak'));
    }
}
