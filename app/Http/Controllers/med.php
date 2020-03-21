<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class med extends Controller
{
    public function submit_med(Request $req)
    {
    	$req->validate([
    		'name'=>'required',
    		'price'=>'required|integer',
    		'stock'=>'required|integer',
    		//'add'=>'required',
    	]);
    	$db= DB::table('med')->insert(["name"=>$req->name,"price"=>$req->price,"stock"=>$req->stock]);
    	if($db)
    	{
    		return redirect('admin')->withSuccess('Medicne added');

    	}
    }
}
