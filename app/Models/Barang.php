<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = "barang";
    protected $fillable = [
        'id_kategori',
        'gambar',
        'nama',
        'deskripsi',
        'harga',
        'diarsipkan'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function promo()
    {
        return $this->belongsToMany(Promo::class, 'promo_barang', 'id_barang', 'id_promo')
            ->withTimestamps();
    }
}
