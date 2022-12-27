<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekomendasi extends Model
{
    use HasFactory;
    protected $table = 'rekomendasi';
    protected $fillable = ['id', 'id_kost', 'created_at', 'updated_at'];
}