<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
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
		$getTrendingMenu = Products::getTrendingMenu(6);
		$getHomeBanners = Products::getHomeBanners();
		$p_customer_fav = Products::getProductsList(array('p_customer_fav'=>1) , 8);
		$p_trending = Products::getProductsList(array('p_trending'=>1) , 8);
		//echo '<pre>';print_r($getTrendingMenu);die;
        return view('index',compact('getMenuItems','getHomeBanners','p_customer_fav','p_trending','getTrendingMenu'));
    }
	
	public function search(Request $request){
		$post = $request->all();
		$keywords = isset($post['q'])?$post['q']:'';
		$cat = $post['cat'];
		$getMenuItems = Products::getMenuItems();
		$SearchProductsList = Products::SearchProductsList(array() , 100, $keywords, $cat);
		$getfiltercolor = Products::getfiltercolor();
		//echo '<pre>';print_r($SearchProductsList);
        return view('search',compact('getMenuItems'));
    }
	
	public function products(Request $request){
		$post = $request->all();
		$segments = $request->segment(2);
		$start = ($request->segment(3))? $request->segment(3) : 0;
		$cat = str_replace('_', ' ', $segments);
		$getMenuItems = Products::getMenuItems();
		$getBrowseProductsList = Products::getBrowseProductsList(array(), 15 , $cat);
		//echo '<pre>';print_r($getBrowseProductsList);die;
        return view('products',compact('getMenuItems','getBrowseProductsList'));
    }
	
    public function dashboard()
    {
	//echo '<pre>';print_r(Auth::user());die;	
        return view('home');
    }
	
	
}
