<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
	protected $table= 'makanans';
	protected $fillable = ['nama_makanan', 'keterangan', 'harga', 'gambar'];


 public function Pesanan_detail()
    {
    	return $this->hasMany('App\Pesanan_detail', 'makanan_id', 'id');
    }
}