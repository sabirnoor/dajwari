<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Products extends Model {
	
	protected $table = 'dajwari_products';
	protected $primaryKey = 'id';
	protected $fillable = ['id','timestamp'];
	
	public static function getCustomerFav(){
		$data = DB::table('dajwari_products as c1')
			->where('c1.p_customer_fav', 1)
			->orderBy('c1.id', 'DESC')->get();	
		return $data;
	}
  
}
?>