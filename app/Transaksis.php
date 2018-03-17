<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksis extends Model
{
    //
    protected $table = 'transaksis';
     protected $fillable =['nama_pembeli','no_tlp','alamat_pembeli','tgl_membeli','barang_id','jumlah_barang','total_harga'];
    public function barang()
    {
 	return $this->belongsTo('App\Barang');
    }
}
