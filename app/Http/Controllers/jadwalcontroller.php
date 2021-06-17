<?php

namespace App\Http\Controllers;

use App\models\jadwalmodel;
use jadwaltable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jadwalcontroller extends Controller
{

    public function form()
    {
        $guru = DB::table('gurutable')->get();
        $pelajaran = DB::table('pelajarantable')->get();
        $ruang = DB::table('ruangtable')->get();
        $kelas = DB::table('kelastable')->get();

        return view("Master.tambah-jadwal", ['guru'=>$guru, 'pelajaran'=>$pelajaran, 'kelas'=>$kelas, 'ruang'=>$ruang]);
    }
    public function insert(Request $request)
    {
        $insert= new jadwalmodel();
        $insert->id=$request->id;
        $insert->id_guru= $request->id_guru;
        $insert->pelajaran=$request->pelajaran;
        $insert->ruang=$request->ruang;
        $insert->kelas=$request->kelas;
        $insert->masuk=$request->masuk;
        $insert->keluar=$request->keluar;
        $insert->tanggal=$request->tanggal;
        




        $insert->save();
        return redirect('jadwaltabel');
    }    
  
    public function tabel(request $request)
    { 
        $data = jadwalmodel::with('guruk','pelajaranh','ruangh','kelash')->get();

        // dd($data);

        return view("jadwal",compact('data'));
    }

    public function delete($id){
    jadwalmodel::where('id','=',$id)->delete();
    return redirect()->back();
    }

    
    public function edit($id)
    {
        //dd('ini edit);
        $model= jadwalmodel::where('id', $id)->first();
        return view('edit-jadwal', compact('model'));
    }

    public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        // dd($request->all(), jadwalmodel:where('id', $id)->first());

        jadwalmodel::where('id', $id)->update([
            'id_guru'=> $request->guru,
            'pelajaran'=> $request->pelajaran,
            'ruang'=> $request->ruang,
            'kelas'=> $request->kelas,
            'masuk'=> $request->masuk,
            'keluar'=> $request->keluar,


        ]);

        return redirect('jadwaltable');
    }

    public function jadwal(){
        $data = jadwalmodel::with('guruk', 'pelajaranh')->get();

        return view('jadwal',['data'=>$data]);

    }

}
