<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class consult extends Controller
{
    //
    public function fun1()
    {
    	$doc1 = DB::select('SELECT * FROM doctors');
    	return view('doc', ['doc1' => $doc1]);
    }
}
