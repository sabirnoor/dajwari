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
use App\Account;

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
        
        //echo '<pre>';print_r($post);die;
		$user = $post['user'];
		$password = $post['password'];
		$getUserList = Account::checkuser($user);
		//echo '<pre>';print_r($getUserList);die;
		if($getUserList->userexists==1){
			$loginby = $getUserList->user_loginby;
			$getUser = Account::userlogin($user,$password,$loginby);
		}
		else{
			//$getUserList = Account::userregister();
		}
		$getUser['success'] = 1;
		return json_encode($getUser);
        //return view('index', compact('getMenuItems', 'getHomeBanners', 'p_customer_fav', 'p_trending', 'getTrendingMenu','getHomeAdvts','getTestimonials','getBlogs'));
    }
	
	
	
	 public function deliverAddress(Request $request) {
        $post = $request->all();
        $data = array(
		               'address' => $post['address'],
					   'city' => $post['city'],
					   'state' => $post['state'],
					   'zipcode' => $post['zipcode']
					  );
	    echo $insertDelivery = Account::delivery($data);
		
    }

    

    
    
    
    

}
