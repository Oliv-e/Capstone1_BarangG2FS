<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class promo extends Model
{
    use HasFactory;
    protected $table = "promo";
    protected $fillable = [
        'id_barang',
        'nama',
        'deskripsi',
        'pengurangan_harga'
    ];
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id');
    }
}
