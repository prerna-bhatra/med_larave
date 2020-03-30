<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LiveSearch extends Controller
{
    //
    function fun1(Request $request)
    {
    	$name = $request->input('search');
    	$phone = '%'.$name.'%';
		$seachbyphone = DB::select('SELECT name FROM med WHERE name LIKE ?',[$phone]);
		 //return $seachbyphone;
		//print_r($seachbyphone);
		return view('fetch', ['seachbyphone' => $seachbyphone]);
    }
}
