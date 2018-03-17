<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    //
     protected $fillable = ['jenis_barang'];
     public function barangs()
 {
 	return $this->hasMany('App\Barang','jenisbarang_id');
 }

}
