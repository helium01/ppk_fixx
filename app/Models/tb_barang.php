<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_barang extends Model
{
    use HasFactory;
    protected $table='tb_barangs';
    protected $fillable=[
        'id',
        'id_kategori',
        'id_pedagang',
        'harga',
        'deskripsi',
        'berat',
        'foto',
    ];
}
