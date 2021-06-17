<?php

namespace App\Http\Controllers;

use App\models\kelasModel as mk;
use kelastable;
use Illuminate\Http\Request;

class kelascontroller extends Controller
{
    
    public function insert(Request $request)
    {
        $insert= new mk();
        $insert->id=$request->id;
        $insert->kelas= $request->kelas;
        $insert->jumlah_murid=$request->jumlah_murid;
        
        $insert->save();
        return redirect('kelastable');
    }

    public function tabel(request $request)
    { 
        $model = new mk;
        $data= $model->get();
        return view("botol/kelas",compact('data'));
    }
    public function delete($id){
        mk::where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        //dd('ini edit);
        $model= mk::where('id', $id)->first();
        return view('edit-kelas', compact('model'));
    }

    public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        //dd($request->all(), mk::where('id', $id)->first());

        mk::where('id', $id)->update([
            'kelas'=> $request->kelas,
            'jumlah_murid'=>$request->jumlah_murid
        ]);

        return redirect('kelastable');
    }


}
