<?php

namespace App\Http\Controllers;

use App\Makanan as md;
use makanans;
use App\Pesanan;
use App\Pesanan_detail;
use App\Pembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use App\User;
use Auth;
use Alert;
use SweetAlert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MakananController extends Controller
{
     public function insert(Request $request)
    {
        // $validatedata = $request->validate([
        //     'gambar'=> 'required',]);
        // $file = $request->gambar;
        // $images = $file->getClientOriginalName();
        // $file->move(public_path().'/images',$images);

        $insert= new md();
        $insert->id=$request->id;
        $insert->nama_makanan= $request->nama_makanan;
        $insert->harga=$request->harga;
        $insert->keterangan=$request->keterangan;
     	$insert->gambar=$request->gambar;


        $insert->save();
        return redirect('makanans');
    }


     public function tabel(request $request)
     { 
         $model = new md;
         $data= $model->get();
         return view("lilin/makanan",compact('data'));
     }

    public function delete($id){
        md::where('id','=',$id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        //dd('ini edit);
        $model= md::where('id', $id)->first();
        return view('edit-makanan', compact('model'));
    }

     public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        // dd($request->all(), md::where('id', $id)->first());

        md::where('id', $id)->update([
            'nama_makanan'=> $request->nama_makanan,
            'harga'=> $request->harga,
            'keterangan'=> $request->keterangan,
            'gambar'=> $request->gambar


        ]);

        return redirect('makanans');
    }
    
}
