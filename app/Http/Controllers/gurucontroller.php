<?php

namespace App\Http\Controllers;

use App\models\guruModel as md;
use gurutable;
use Illuminate\Http\Request;

class gurucontroller extends Controller
{
    public function insert(Request $request)
    {
        $insert= new md();
        $insert->id=$request->id;
         $insert->NIP= $request->NIP;
        $insert->nama_guru=$request->nama_guru;
        $insert->gender=$request->gender;

        $insert->save();
        return redirect('gurutable');
    }

     public function tabel(request $request)
     { 
         $model = new md;
         $data= $model->get();
         return view("botol/guru",compact('data'));
     }

    public function delete($id){
        md::where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        //dd('ini edit);
        $model= md::where('id', $id)->first();
        return view('edit-guru', compact('model'));
    }
    
    public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        // dd($request->all(), md::where('id', $id)->first());

        md::where('id', $id)->update([
            'NIP'=> $request->NIP,
            'nama_guru'=> $request->nama_guru,
            'gender'=> $request->gender
        ]);

        return redirect('gurutable');
    }

}
