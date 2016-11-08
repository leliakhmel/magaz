<?php

namespace App\Http\Controllers;
use App\Maintext;

use Illuminate\Http\Request;

use App\Http\Requests;

class BaseController extends Controller
{
    public function getIndex(){
		//dd($id);
		$text=Maintext::where('url', 'index')->first();
		return view('index')->with('text', $text);
	}
	
	public function getStatic($id){
		return view('static')->with('id',$id);
	}
}
