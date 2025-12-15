class Transaksi extends Model {
    protected $primaryKey = 'id_transaksi';
    protected $fillable = ['id_user','id_customer','tanggal','total_harga'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function customer() {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function detailTransaksis() {
        return $this->hasMany(DetailTransaksi::class, 'id_transaksi');
    }
}
