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
use Session;

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

        $user = $post['user'];
        $password = $post['password'];
        $getUserList = Account::checkuser($user);
        //echo '<pre>';print_r($getUserList); die;
        if($request->password){
            if($getUserList->userexists == 1){
                $loginby = $getUserList->user_loginby;
                $getUser = Account::userlogin($user, $password, $loginby);
                if($getUser){
                    Session::put('user', $getUser);
                    Session::save();
                    $Delivery = Account::getAddress($getUser->id);
                    return response()->json(['status' => true, 'error'=>false, 'userexists' => $getUserList->userexists,'message'=>'Login successfully','Delivery'=>$Delivery]); 
                    
                }else{
                   return response()->json(['status' => false, 'error'=>true, 'userexists' => $getUserList->userexists,'message'=>'Invalid username or password']); 
                }
               
            }else{
                $fields = $getUserList->user_loginby;
                $data = array(
                    ''.$fields.'' => $post['user'],
                    'password' => md5($post['password']),
                    'is_active' => 1,
                    'created' => date('Y-m-d H:i:s'),
                    'modified' => date('Y-m-d H:i:s')
                );
                
                $insertid = DB::table('dajwari_users')->insertGetId($data);
                $dataDetails = array(
                    'user_id' => $insertid,
                    'user_id' => '',
                    'created' => date('Y-m-d H:i:s'),
                    'modified' => date('Y-m-d H:i:s')
                );
                DB::table('dajwari_user_details')->insertGetId($dataDetails);
                $getUser = Account::userlogin($user, $password, $fields);
                //echo '<pre>';print_r($getUser);die;
                if($getUser){
                    Session::put('user', $getUser);
                    Session::save();
                    $Delivery = Account::getAddress($getUser->id);
                    return response()->json(['status' => true, 'error'=>false, 'userexists' => $getUserList->userexists,'message'=>'Login successfully','Delivery'=>$Delivery]); 
                }else{
                    return response()->json(['status' => false, 'error'=>true, 'userexists' => $getUserList->userexists,'message'=>'Oops something wrong']); 
                }
            }
            
        }else{
            return response()->json(['status' => false, 'error'=>false, 'userexists' => $getUserList->userexists,'message'=>'']);
        }
        
        if($getUserList->userexists == 0) {
            return response()->json(['status' => false, 'userexists' => $getUserList->userexists]);
        }
        
        if($getUserList->userexists == 1) {
            $loginby = $getUserList->user_loginby;
            $getUser = Account::userlogin($user, $password, $loginby);
        } else {
            //$getUserList = Account::userregister();
        }
        $getUser['success'] = 1;
        return json_encode($getUser);
        //return view('index', compact('getMenuItems', 'getHomeBanners', 'p_customer_fav', 'p_trending', 'getTrendingMenu','getHomeAdvts','getTestimonials','getBlogs'));
    }
    
    public function saveaddress(Request $request) {
        $post = $request->all();
        $data = array(
            'user_id' => Session::get('user')->id,
            'name' => $post['name'],
            'mobile' => $post['mobile'],
            'locality' => $post['Locality'],
            'landmark' => $post['Landmark'],
            'AlternatePhone' => $post['Alternateno'],
            'addresstype' => $post['addresstype'],
            'address' => $post['Address'],
            'city' => $post['cityTown'],
            'state' => $post['state'],
            'zipcode' => $post['pincode']
        );
        if($request->address_id){
            $data['modified'] = date('Y-m-d h:i:s');
            $UpdateDelivery = Account::deliveryUpdate($request->address_id,$data);
            if($UpdateDelivery){
                return response()->json(['status' => true, 'error'=>false, 'userexists' => '','message'=>'Address Update successfully']);
            }else{
                return response()->json(['status' => false, 'error'=>true, 'userexists' => '','message'=>'Unable to update address']);
            }
        }else{
            $data['created'] = date('Y-m-d h:i:s');
            $data['modified'] = date('Y-m-d h:i:s');
            $insertDelivery = Account::delivery($data);
            if($insertDelivery){
                return response()->json(['status' => true, 'error'=>false, 'userexists' => '','message'=>'Address save successfully']);
            }else{
                return response()->json(['status' => false, 'error'=>true, 'userexists' => '','message'=>'Unable to save address']);
            }
//            echo '<pre>';print_r($insertDelivery);
//            echo '<pre>';print_r($data);die('dd');
        }
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
