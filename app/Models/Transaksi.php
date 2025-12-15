<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis'; // SESUAI MIGRATION
    protected $primaryKey = 'id_transaksi'; // SESUAI DB
    public $timestamps = true;

    protected $fillable = [
        'id_customer',
        'tanggal',
        'total',
    ];
}
