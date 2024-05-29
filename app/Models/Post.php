<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "post";

    protected $fillable = [
        'id_barang',
        'id_kategori',
        'id_promo',
        'id_ulasan',
    ];
}
