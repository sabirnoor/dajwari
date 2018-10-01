<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use DB;
use App\DajwariCategories;
use App\Products;
use Validator;
use Cart;

class AccountController extends Controller {

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
    public function checkuser(Request $request) {
        $post = $request->all();
        
        echo '<pre>';print_r($post);die;
        //return view('index', compact('getMenuItems', 'getHomeBanners', 'p_customer_fav', 'p_trending', 'getTrendingMenu','getHomeAdvts','getTestimonials','getBlogs'));
    }

    

    
    
    
    

}
