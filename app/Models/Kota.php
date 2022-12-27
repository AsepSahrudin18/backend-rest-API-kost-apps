<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    /**
     * mapping table
     * mapping kolom
     */
    protected $table = 'kota';
    protected $fillable = ['id', 'nama_kota', 'created_at', 'updated_at'];
}