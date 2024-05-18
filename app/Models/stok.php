<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    use HasFactory;
    protected $table = "stok";
    protected $fillable = [
        'id_barang',
        'jumlah',
    ];
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id','id_barang');
    }
}
