<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use ruangtable;
 
class gtwController extends Controller
{
 
    public function insert()
    {
    	$guru = ruangtable::All();
    	return view('ruangtable', ['ruangtable' => $guru]);
    }
}