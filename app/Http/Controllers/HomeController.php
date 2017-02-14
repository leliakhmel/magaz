<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	 public function postindex(Requests\ProductRequest $r)
    {
        //dd($_POST);
		//dd($r->all());
		$f=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/photos/');
		$r['user_id']=Auth::user()->id;
		if ($f){
			$r['picture']=$f;
		}
		else{
			$r['picture']='-';
		}
		$r['tovar_small']='s_'.$f;
		$r['tovar']=$f;
		Product::create($r->all());
		return redirect('home');
    }
	  public function getIndex()
    {
		$all = Product :: where('user_id', Auth::user()->id)->orderBy('id', 'DESC') ->paginate();
        return view('home')->with('all', $all);
    }
	
	  public function getDelete($id)
    {
		Product :: where('user_id', Auth::user()->id)->where('id', $id) ->delete();
        return redirect('/catalog');
    }
	
	
	  public function getEdit($id)
    {
		$one = Product :: where('id', $id)->where('user_id', Auth::user()->id) ->first();
        return view('edit')->with('one', $one);
	}
	
	  public function postEdit(Requests\ProductRequest $r, $id)
    {
		$f=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/photos/');
		$r['user_id']=Auth::user()->id;
		if ($f){
			$r['picture']=$f;
		}
		else{
			$r['picture']='-';
		}
		$r['tovar_small']='s_'.$f;
		$r['tovar']=$f;
		Product::updateOrCreate(['user_id'=>Auth::user()->id, 'id'=>$id],$r->all());
        return redirect('/catalog');
	}
}
