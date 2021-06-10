<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan_detail extends Model
{
    public function Makanan()
    {
    	return $this->belongsTo('App\Makanan', 'makanan_id', 'id');
    }

     public function Pesanan()
    {
    	return $this->belongsTo('App\Pesanan', 'pesanan_id', 'id');
    }
}
