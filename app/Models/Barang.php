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
    public function stock()
    {
        return $this->hasOne(Stock::class, 'id_barang', 'id');
    }
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function promo()
    {
        return $this->belongsToMany(Promo::class, 'promo_barang', 'id_barang', 'id_promo')
            ->withTimestamps();
    }

    public function userHasPurchased()
    {
        $transaksi = Transaksi::where('id_user', auth()->id())
                            ->whereHas('detailTransaksi', function ($query) {
                                $query->where('id_barang', $this->id);
                            })
                            ->exists();

        return $transaksi;
    }
}
