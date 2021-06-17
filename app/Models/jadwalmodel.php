<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwalmodel extends Model
{
    protected $table="jadwaltabel";

    public function guruk(){
        return $this->hasOne(\App\models\guruModel::class,'id','id_guru');
    }

    public function pelajaranh(){
        return $this->hasOne(\App\models\pelajaranmodel::class,'id','pelajaran');
    }

    public function ruangh(){
        return $this->hasOne(\App\models\ruangmodel::class,'id','ruang');
    }

    public function kelash(){
        return $this->hasOne(\App\models\kelasmodel::class,'id','kelas');
    }
}
