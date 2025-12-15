<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $primaryKey = 'id_produk'; // ⬅️ INI KUNCINYA

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'nama_produk',
        'harga',
        'stock',
    ];
}
