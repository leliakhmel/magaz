<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CatalogController extends Controller
{
    public function getIndex(){
	$all=Product::paginate(10);
	return view('catalog')->with('all',$all);
	}
}
