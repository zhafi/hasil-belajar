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

class PesanController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
    	$makanan = Makanan::where('id', $id)->first();

    	return view ('pesan.index', compact('makanan'));

    }

    public function pesan(Request $request, $id)
    {
    	$makanan = Makanan::where('id', $id)->first();

    	$tanggal = Carbon::now();


    	//cek validasi
    	$cek_pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//simpan database pesanan
    	if(empty($cek_pesanan))
    	{
    	$pesanan = new Pesanan;
    	$pesanan->user_id = Auth::user()->id;
        $pesanan->nama = Auth::user()->name;
    	$pesanan->tanggal = $tanggal;
    	$pesanan->status = 0;
    	$pesanan->jumlah_harga = 0;
        $pesanan->kode = mt_rand(100, 999);
    	$pesanan->save();


    	}

    	
    	//simpan ke database pesanan_detail
    	$pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

    	//cek pesanan detail
    	$cek_pesanan_detail = Pesanan_detail::where('makanan_id', $makanan->id)->where('pesanan_id', $pesanan_baru->id)->first();
    	if(empty($cek_pesanan_detail))
    	{
    	$pesanan_detail = new Pesanan_detail;
    	$pesanan_detail->makanan_id = $makanan->id;
    	$pesanan_detail->pesanan_id = $pesanan_baru->id;
    	$pesanan_detail->jumlah = $request->jumlah_pesan;
    	$pesanan_detail->jumlah_harga = $makanan->harga*$request->jumlah_pesan;
    	$pesanan_detail->save();
        }else
        {
        	$pesanan_detail = Pesanan_detail::where('makanan_id', $makanan->id)->where('pesanan_id', $pesanan_baru->id)->first();
        	$pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

        	//harga total
        	$harga_pesanan_detail_baru = $makanan->harga*$request->jumlah_pesan;
    	    $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
    	    $pesanan_detail->update();
        }


        //jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$makanan->harga*$request->jumlah_pesan;
        $pesanan->update();


        alert()->success('Pesanan Sudah Masuk Keranjang', 'Yuk CheckOut');
    
    	return redirect('home');
    }

    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                $pesanan_details = [];


        if (!empty($pesanan)) 
        {
        $pesanan_details = Pesanan_detail::where('pesanan_id', $pesanan->id)->get();
            
        }

        
        return view('pesan.check_out', compact('pesanan', 'pesanan_details')); 

    }

    public function delete($id)
    {
        $pesanan_detail = Pesanan_detail::where('id', $id)->first();


        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();

        alert()->error('Pesanan Terhapus', 'Yakin Menghapus?')->persistent('Close');

        return view('pesan.check_out');
    }

    public function konfirmasi()
    {
      $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
        alert()->error('Isi Identitas', 'alamat tidak ada')->persistent('Close');

        return redirect('profile');
        }
        if (empty($user->nohp)) 
        {
        alert()->error('Isi Identitas', 'nohp tidak ada')->persistent('Close');

                return redirect('profile');
        }
    
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

       alert()->success('Pesanan Sudah Diproses', 'Terima Kasih');

               return redirect('riwayat/'.$pesanan_id);



    }

}
