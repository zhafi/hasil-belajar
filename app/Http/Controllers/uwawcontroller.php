<?php

namespace App\Http\Controllers;

use App\models\jadwalmodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class uwawcontroller extends Controller
{

    public function form()
    {
        $guru = DB::table('gurutable')->get();
        $pelajaran = DB::table('pelajarantable')->get();
        $ruang = DB::table('ruangtable')->get();
        $kelas = DB::table('kelastable')->get();
        $data=jadwalmodel::with('guruk', 'pelajaranh', 'ruangh', 'kelash')->get();
        return view("uwaw", ['guru'=>$guru, 'pelajaran'=>$pelajaran, 'kelas'=>$kelas, 'ruang'=>$ruang]);
    }
    public function insert(Request $request)
    {

        // for($i=0; $i<count($request->nama_guru); $i++){
        //     echo "index ke-".$i." nilainya ".$request->nama_guru[$i]."<br>";
        // }

        // die();

        // dd($request->all());

        $data = [];
        foreach ($request->nama_guru as $index => $value) {

        $data[] = [
            'id_guru' => $value,
            'pelajaran' => $request->pelajaran[$index],
            'ruang' => $request->ruang[$index],
            'kelas' => $request->kelas[$index],
            'masuk'=> $request->masuk[$index],
            'keluar' => $request->keluar[$index],
            'tanggal' => date('Y-m-d',strtotime($request->tanggal[$index])),
            'created_at' => (string) now(),
            'updated_at' => (string) now(),
        ];

        }

        jadwalmodel::insert($data);

        return redirect('jadwaltabel');

    }    
  
    public function tabel(request $request)
    { 
        $model = new jadwalmodel;
        $data= $model->get();
        return view("uwaw",compact('data'));
    }

    // public function delete($id){
    // jadwalmodel::where('id','=',$id)->delete();
    // return redirect()->back();
    // }

    
    // public function edit($id)
    // {
    //     //dd('ini edit);
    //     $model= jadwalmodel::where('id', $id)->first();
    //     return view('edit-jadwal', compact('model'));
    // }

    public function update(Request $request, $id)
    {
        //dd('masuk update', $id);

        // dd($request->all(), jadwalmodel:where('id', $id)->first());

        jadwalmodel::where('id', $id)->update([
            'nama_guru'=> $request->guru,
            'pelajaran'=> $request->pelajaran,
            'ruang'=> $request->ruang,
            'kelas'=> $request->kelas,
            'masuk'=> $request->masuk,
            'keluar'=> $request->keluar,


        ]);

        return redirect('jadwaltabel');
    }

    public function uwuw(){
        $data = jadwalmodel::with('guruk', 'pelajaranh', 'ruangh', 'kelash')->get();

        return view('uwuw',['data'=>$data]);

    }

}
