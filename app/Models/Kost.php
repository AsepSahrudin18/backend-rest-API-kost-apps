<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;
    // mapping table
    protected $table = 'kost';
    // mapping kolom
    protected $fillable = [
        'id', 
        'nama_kost', 
        'luas_kamar', 
        'harga_kamar', 
        'alamat_kost', 
        'keterangan', 
        'foto_kamar', 
        'id_kota', 
        'id_user', 
        'id_fasilitas',
        'created_at', 
        'updated_at'
    ];
}