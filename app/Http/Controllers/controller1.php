<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model1;

class controller1 extends Controller
{
    public function index(request $request){
        $model = new model1;
        $data= $model->get();

        return view('iku', compact('data'));}

}
