<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tb_galeri;
use App\Models\tb_kategori;

class kontakkcontroller extends Controller
{
    //
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
        
        return view('client.content.kontak',compact('profil','kategori','galery','kontak'));
    }
}
