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
        'jumlah'
    ];
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id', 'user_id');
    }
}
