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

class PembayaranController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pembayarans = Pembayaran::all();
        

        return view('pembayaran', compact('pembayarans'));
    }

    public function detail($id)
     {
        $pesanans = Pesanan::where('id', $id)->first();
             
        $pesanan_details = Pesanan_detail::where('pesanan_id', $pesanan->id)->get();
        $pesanan_details->kode_pesanan = $pesanan->kode;


        
        return view('pembayaran', compact('pesanan', 'pesanan_details'));
    }
}
