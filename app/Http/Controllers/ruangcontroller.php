<?php

namespace App\Http\Controllers;

use App\Models\ruangmodel  as mr;
use ruangtable;
use Illuminate\Http\Request;

class ruangcontroller extends Controller
{
    public function insert(Request $request)
    {
        $insert= new mr();
        $insert->id=$request->id;
        $insert->jumlah_gedung= $request->jumlah_gedung;
        
        $insert->save();
        return redirect('ruangtable');
    }

    public function tabel(request $request)
    { 
        $model = new mr;
        $data= $model->get();
        return view("botol/ruang",compact('data'));
    }
    public function delete($id){
        mr::where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        //dd('ini edit);
        $model= mr::where('id', $id)->first();
        return view('edit-ruang', compact('model'));
    }

    public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        // dd($request->all(), md::where('id', $id)->first());

        mr::where('id', $id)->update([
            'jumlah_gedung'=> $request->jumlah_gedung,
        ]);

        return redirect('ruangtable');
    }


}
