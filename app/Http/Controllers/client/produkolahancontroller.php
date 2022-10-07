<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class produkolahancontroller extends Controller
{
    //
    public function home(){
        return view('client.content.produk');
    }
}
