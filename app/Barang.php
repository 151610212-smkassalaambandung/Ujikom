<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
     protected $fillable =['nama_barang','modeli_id','jenisbarang_id','jumlah_barang','harga','cover'];
    public function modeli()
    {
 	return $this->belongsTo('App\Modeli');
    }

     public function jenis()
    {
 	return $this->belongsTo('App\Jenis','jenisbarang_id');
    }
}
