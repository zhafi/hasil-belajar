<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Pesanan;
use App\Pesanan_detail;
use App\Pembayaran;
use App\User;
use Auth;
use Alert;
use SweetAlert;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status','!=',0)->get();

    	return view('riwayat.index', compact('pesanans'));
    }

    public function detail($id)
     {
        $pesanan = Pesanan::where('id', $id)->first();
             
        $pesanan_details = Pesanan_detail::where('pesanan_id', $pesanan->id)->get();
        $pesanan_details->kode_pesanan = $pesanan->kode;


        
    	return view('riwayat.detail', compact('pesanan', 'pesanan_details'));

    }

    public function cetak($id)
     {
        $pesanan = Pesanan::where('id', $id)->first();
             
        $pesanan_details = Pesanan_detail::where('pesanan_id', $pesanan->id)->get();
        $pesanan_details->kode_pesanan = $pesanan->kode;


        
        return view('riwayat.cetak', compact('pesanan', 'pesanan_details'));

    }


}
