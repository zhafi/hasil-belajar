<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Pesanan;
use App\Pesanan_detail;
use App\Pembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\User;
use Auth;
use Alert;
use SweetAlert;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function index()
     {

        $pesanans = Pesanan::all();

    	return view('admin.orderan', compact('pesanans'));
    }

     public function detail($id)
     {
        $pesanan = Pesanan::where('id', $id)->first();
             
        $pesanan_details = Pesanan_detail::where('pesanan_id', $pesanan->id)->get();

        
    	return view('admin.detail', compact('pesanan', 'pesanan_details'));

    }

        public function delete($id)
            {
                $makanan = Makanan::where('id', $id)->first();
                $makanan->delete();

        alert()->error('Makanan Terhapus', 'Yakin Menghapus?')->persistent('Close');
  
        return view('lilin.Makanan');
    }

 public function edit($id)
    {
        //dd('ini edit);
        $model= Pesanan::where('id', $id)->first();
        return view('orderan', compact('Pesanan'));
    }

     public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        // dd($request->all(), md::where('id', $id)->first());

        Pesanan::where('id', $id)->update([
            'pengambil'=> $request->pengambil,
            'pickup'=> $request->pickup,
           

        ]);

        return redirect('orderan');
    }

}
