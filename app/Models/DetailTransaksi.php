class DetailTransaksi extends Model {
    protected $fillable = [
        'id_transaksi','id_produk','jumlah','harga','subtotal'
    ];

    public function produk() {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
}
