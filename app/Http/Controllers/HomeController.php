<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\DajwariCategories;
use App\Products;
use Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
		$post = $request->all();
		$getCustomerFav = Products::getCustomerFav();
		//echo '<pre>';print_r($getCustomerFav);die;
        return view('index',compact('getCustomerFav'));
    }
	public function search(Request $request){
		$post = $request->all();
		$details = DajwariCategories::getCategories();
		//echo '<pre>';print_r($details);die;
        return view('search');
    }
    public function dashboard()
    {
	//echo '<pre>';print_r(Auth::user());die;	
        return view('home');
    }
	
	
}
