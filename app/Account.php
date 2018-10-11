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
        if(preg_match('/^\d{10}$/',$user)){
            $fields = 'mobile';
        }else{
            $fields = 'user_email';
        }
        $data = DB::table('dajwari_users as c1')->where('c1.' . $fields . '', $user)->orderBy('c1.id', 'DESC')->first();
        $loginby = $fields;
        if ($data) {
            $data->userexists = 1;
        } else {
            $data = (Object) $data;
            $data->userexists = 0;
        }
        $data->user_loginby = $loginby;
        return $data;
    }

    public static function userlogin($user, $password, $fields) {
        //\DB::enableQueryLog();
        $data = DB::table('dajwari_users as c1')
                ->where('c1.' . $fields . '', $user)
                ->where('c1.password', md5($password))
                ->first();
        //$query = \DB::getQueryLog();
        //var_dump($data); exit;
//        if ($data) {
//            Session::put('user', $data);
//            Session::save();
//        }
        //print_r(end($query));
        //print_r(Session::get('user'));


        return $data;
    }

    public static function delivery($data) {
        return $last_id = DB::table('dajwari_deliverAddress')->insertGetId($data);
    }
    public static function deliveryUpdate($id,$data) {
        return DB::table('dajwari_deliverAddress') ->where('id', $id)->update($data);
    }
    
    public static function getAddress($user_id) {
        $data = DB::table('dajwari_deliveraddress as c1')
                ->where('c1.user_id', $user_id)
                ->first();
        return $data;
    }

}

?>