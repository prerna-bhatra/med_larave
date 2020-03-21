<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
class store extends Controller
{
    //
    public function submit_store(Request $req)
    {
    	$req->validate([
    		'name'=>'required',
    		'email'=>'required',
    		'mob'=>'required|integer',
    		'add'=>'required',
    	]);
    	$db= DB::table('store')->insert(["name"=>$req->name,"email"=>$req->email,"mob"=>$req->mob,"addr"=>$req->add]);
    	if($db)
    	{
    		return redirect('admin')->withSuccess('IT WORKS!');

    	}
	} 
}
