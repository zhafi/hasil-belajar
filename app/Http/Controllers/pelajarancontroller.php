<?php

namespace App\Http\Controllers;

use App\Models\pelajaranmodel as mp;
use pelajarantable;
use Illuminate\Http\Request;

class pelajarancontroller extends Controller
{
    public function insert(Request $request)
    {
        $insert= new mp();
        $insert->id=$request->id;
        $insert->nama_pelajaran=$request->nama_pelajaran;
        
        $insert->save();
        return redirect('pelajarantable');
    }

    public function tabel(request $request)
    { 
        $model = new mp;
        $data= $model->get();
        return view("botol/pelajaran",compact('data'));
    }
    public function delete($id){
        mp::where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        //dd('ini edit);
        $model= mp::where('id', $id)->first();
        return view('edit-pelajaran', compact('model'));
    }

    public function update(Request $request, $id)
    {
        {
            //dd('masuk update', $id);
    
            //dd($request->all(), mp::where('id', $id)->first());
    
            mp::where('id', $id)->update([
              'nama_pelajaran'=> $request->nama_pelajaran,
              
                ]);
    
            return redirect('pelajarantable');
        }
    
    }


}
