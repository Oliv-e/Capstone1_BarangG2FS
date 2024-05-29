<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;
    protected $table = "detail_transaksi";
    protected $fillable = [
        'id_transaksi',
        'resi',
        'status',
    ];
    public function transaksi()
    {
        return $this->belongsTo(transaksi::class, 'id', 'id_transaksi');
    }
}
