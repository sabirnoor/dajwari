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
    public function index(Request $request){//echo img_src_path();
		$post = $request->all();
		$getMenuItems = Products::getMenuItems();
		$getHomeBanners = Products::getHomeBanners();
		$p_customer_fav = Products::getProductsList(array('p_customer_fav'=>1) , 8);
		$p_trending = Products::getProductsList(array('p_trending'=>1) , 8);
		//echo '<pre>';print_r($getMenuItems);die;
        return view('index',compact('getMenuItems','getHomeBanners','p_customer_fav','p_trending'));
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
