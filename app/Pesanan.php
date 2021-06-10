<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
     public function user()
    {
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }

     public function pesanan_detail()
    {
    	return $this->hasMany('App\Pesanan_detail', 'pesanan_id', 'id');
    }
}

