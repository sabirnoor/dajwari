<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class DajwariCategories extends Model {
	
	protected $table = 'dajwari_categories';
	protected $primaryKey = 'id';
	protected $fillable = ['id','timestamp'];
	
	public static function getCategories(){
		$data = DB::table('dajwari_categories as c1')
			->where('c1.parent_id', 0)
			->orderBy('c1.id', 'DESC')->get();	
		return $data;
	}
  
}
?>