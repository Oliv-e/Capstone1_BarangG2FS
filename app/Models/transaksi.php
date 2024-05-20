<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $fillable = [
        'id_user',
        'id_barang',
        'jumlah',
        'total_harga',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id','id_user');
    }
    public function barang()
    {
        return $this->belongsTo(Barang::class,'id','id_barang');
    }
}