<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use DB;
use App\DajwariCategories;
use App\Products;
use App\Pages;
use Validator;
use Cart;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {	//echo img_src_path();
        $post = $request->all();
        $getMenuItems = Products::getMenuItems();
        $getTrendingMenu = Products::getTrendingMenu(6);
        $getHomeBanners = Products::getHomeBanners();
        $p_customer_fav = Products::getProductsList(array('p_customer_fav' => 1), 8);
        $p_trending = Products::getProductsList(array('p_trending' => 1), 8);
		$getTestimonials = Products::getTestimonials();
		$getBlogs = Products::getBlogs();
		$getHomeAdvts = Products::getHomeAdvts();
        //echo '<pre>';print_r($getBlogs);die;
        return view('index', compact('getMenuItems', 'getHomeBanners', 'p_customer_fav', 'p_trending', 'getTrendingMenu','getHomeAdvts','getTestimonials','getBlogs'));
    }

    public function search(Request $request) { //echo 1;exit;
        $post = $request->all();
        $keywords = isset($post['q']) ? $post['q'] : '';
        $size = isset($post['size']) ? explode(':',$post['size']) : '';
        $color = isset($post['color']) ? explode(':',$post['color']) : '';
        $fabric = isset($post['fabric']) ? explode(':',$post['fabric']) : '';
        $dispatch = isset($post['dispatch']) ? explode(':',$post['dispatch']) : '';
        $cat = $post['cat'];
        $getMenuItems = Products::getMenuItems();
        $SearchProductsList = Products::SearchProductsList(array('size'=>$size,'color'=>$color,'fabric'=>$fabric,'dispatch'=>$dispatch), 100, $keywords, $cat);
        $getfiltercolor = Products::getfiltercolor();
        //echo '<pre>';print_r($SearchProductsList); die();

        return view('search', compact('getMenuItems', 'SearchProductsList','size','color','fabric','dispatch','post'));
    }

    public function products(Request $request) {
        $post = $request->all();
        $segments = $request->segment(2);
        $start = ($request->segment(3)) ? $request->segment(3) : 0;
        $cat = str_replace('_', ' ', $segments);
        $getMenuItems = Products::getMenuItems();
		
		$size = isset($post['size']) ? explode(':',$post['size']) : '';
        $color = isset($post['color']) ? explode(':',$post['color']) : '';
        $fabric = isset($post['fabric']) ? explode(':',$post['fabric']) : '';
        $dispatch = isset($post['dispatch']) ? explode(':',$post['dispatch']) : '';
		
        $getBrowseProductsList = Products::getBrowseProductsList(array('size'=>$size,'color'=>$color,'fabric'=>$fabric,'dispatch'=>$dispatch), 15, $cat);
        //echo '<pre>';print_r($getBrowseProductsList);die;
        return view('products', compact('getMenuItems', 'getBrowseProductsList','size','color','fabric','dispatch','post'));
    }
    
    
    public function details($productName = '') {
        $getMenuItems = Products::getMenuItems();
        $ProductDetails = Products::getDajwariProductDetails($productName, true);
        if(!$ProductDetails) {
            return redirect(url('/'));
        }
        //$cart = Cart::content();
        //echo '<pre>';print_r($ProductDetails);die;
        return view('details2', compact('getMenuItems','ProductDetails'));
    }

    public function dashboard() { //echo 1;exit;
        //echo '<pre>';print_r(Auth::user());die;	
        return view('home');
    }
	//kkk --- from model
	public static function SearchProductsList($cond = null, $limit = null, $keywords = null, $cat = null) {
        //echo '<pre>';print_r($cond['size']); die();
        $size = isset($cond['size']) ? $cond['size'] : '';
        $color = isset($cond['color']) ? $cond['color'] : '';
        $fabric = isset($cond['fabric']) ? $cond['fabric'] : '';
        $dispatch = isset($cond['dispatch']) ? $cond['dispatch'] : '';
        $data = array();
        $Filterdata = array();
        $select = DB::table('dajwari_products as c1')
                        ->select('c1.id', 'c1.cat_id', 'c1.p_name', 'c1.p_code', 'c1.p_short_desc', 'c1.p_fabric', 'c1.p_weight', 'c1.p_price', 'c1.p_availablity', 'c1.p_dispatch', 'c1.p_long_desc', 'c1.stiching_cost', 'c1.p_qty', 'c2.cat_name')
                        ->leftjoin('dajwari_categories as c2', 'c1.cat_id', '=', 'c2.id')
                        ->leftjoin('dajwari_products_sizes as c3', 'c1.id', '=', 'c3.p_id')
                        ->leftjoin('dajwari_products_colors as c4', 'c1.id', '=', 'c4.p_id')
                        ->when($keywords, function ($query, $keywords) {
                            return $query->where('c2.cat_name', 'like', '%' . $keywords . '%');
                        })
                        ->when($size, function ($query, $size) {
                            return $query->whereIn('c3.p_size', $size);
                        })
                        ->when($color, function ($query, $color) {
                            return $query->whereIn('c4.color_name', $color);
                        })
                        ->when($fabric, function ($query, $fabric) {
                            return $query->whereIn('c1.p_fabric', $fabric);
                        })
                        ->when($dispatch, function ($query, $dispatch) {
                            return $query->whereIn('c1.p_dispatch', $dispatch);
                        })
                        ->when($limit, function ($query, $limit) {
                            return $query->limit($limit);
                        })
                        ->groupBy('c1.id', 'c1.cat_id', 'c1.p_name', 'c1.p_code', 'c1.p_short_desc', 'c1.p_fabric', 'c1.p_weight', 'c1.p_price', 'c1.p_availablity', 'c1.p_dispatch', 'c1.p_long_desc', 'c1.stiching_cost', 'c1.p_qty', 'c2.cat_name')->orderBy('c1.p_price', 'ASC')->get();

        if ($select) {
            $counter = 0;
            foreach ($select as $row) {
                $data[$counter]['p_details'] = $row;
                $data[$counter]['p_color'] = self::getProductColorDetails($row->id);
                $data[$counter]['p_size'] = self::getProductSizeDetails($row->id);
                $data[$counter]['p_image'] = self::getProductImageDetails($row->id);

                //$Colordata[] = self::getProductColorDetails($row->id);
                //$Sizedata[] = self::getProductSizeDetails($row->id);
                //$dispatch[] = $row->p_dispatch;
                $counter++;
            }
        }

        $Filterdata['filter_fabric'] = self::getfilterfabric($keywords, $cat);
        $Filterdata['filter_color'] = self::getfiltercolor($keywords, $cat);
        $Filterdata['filter_size'] = self::getfiltersize($keywords, $cat);
        $Filterdata['filter_dispatch'] = self::getfilterdispatch($keywords, $cat);
        $Filterdata['total_records'] = $select->count();


        //$data['filter_dispatch'] = sortArrayval($dispatcharr);
        //echo '<pre>';print_r($data);die;
        return array('data' => $data, 'Filterdata' => $Filterdata);
    }
	
	public function about(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 1;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('about-us',compact('getMenuItems','pageDetails'));
    }
	
	public function contact(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 2;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('contact-us',compact('getMenuItems','pageDetails'));
    }
	
	public function privacy_policy(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 4;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('privacy-policy',compact('getMenuItems','pageDetails'));
    }
	
	public function return_exchange(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 5;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('return-exchange',compact('getMenuItems','pageDetails'));
    }
	
	public function payment_policy(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 6;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('payment-policy',compact('getMenuItems','pageDetails'));
    }
	
	public function website_usage(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 7;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('website-usage',compact('getMenuItems','pageDetails'));
    }
	
	public function term_condition(Request $request) { //echo 1; exit;
		 $post = $request->all();
		 $pid = 8;
		 $getMenuItems = Products::getMenuItems();
		 $pageDetails = Pages::getPageContent($pid);
        //echo '<pre>';print_r($pageDetails);die;	
        return view('term-condition',compact('getMenuItems','pageDetails'));
    }
	

}
