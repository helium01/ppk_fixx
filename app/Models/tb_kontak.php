<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_kontak extends Model
{
    use HasFactory;
    protected $table='tb_kontaks';
    protected $fillable=[
        'id',
        'id_tentang',
        'ak_instagram',
        'ak_facebook',
        'ak_youtube',
    ];
}
