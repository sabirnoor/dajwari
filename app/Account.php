<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Session;

class Account extends Model {

    protected $table = 'dajwari_users';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'timestamp'];

    public static function checkuser($user) {
        
		$data = DB::table('dajwari_users as c1')
                        ->where('c1.user_email', $user)
                        ->orderBy('c1.id', 'DESC')->first();
		
			$loginby = 'user_email';
		
		if(empty($data)){
			$data = DB::table('dajwari_users as c1')
                        ->where('c1.mobile', $user)
                        ->orderBy('c1.id', 'DESC')->first();
			$loginby = 'mobile';			
		}
		
		if(empty($data)){
			$data = (Object)$data;			
			$data->userexists = 0;
		}else{						
			$data->userexists = 1;			
		}
		$data->user_loginby = $loginby;
		//var_dump($data); exit;
		
        return $data;
    }
	
	public static function userlogin($user,$password,$fields) {
        //\DB::enableQueryLog();
		
		$password=base64_encode($password);
		 $data = DB::table('dajwari_users as c1')				
				->where('c1.'.$fields.'', $user)
				->where('c1.password', $password)
				->first(); 
		//$query = \DB::getQueryLog();
		//var_dump($data); exit;
		if($data){
			Session::put('user', $data);
			Session::save();
		}
		//print_r(end($query));
		print_r(Session::get('user'));
		
		
        return $data;
    }

}

?>