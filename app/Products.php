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
	public static function getProductsList($cond = null , $limit = null, $cat = null){
		$data = array();
		$select = DB::table('dajwari_products as c1')
			->select('c1.*', 'c2.cat_name')
			->leftjoin('dajwari_categories as c2', 'c1.cat_id', '=', 'c2.id')
			->when($cond, function ($query, $cond) {
				if(count($cond)) {
					foreach($cond as $key=>$val) {
						return $query->where('c1.'.$key.'', ''.$val.'');
					}
				}
			})
			->when($limit, function ($query, $limit) {
				 return $query->limit($limit);
			})
			->orderBy('c1.id', 'DESC')->get();	
			if ($select) {
				$counter = 0;
				foreach ($select as $row) {
					$data[$counter]['p_details'] = $row;
					$data[$counter]['p_color'] = self::getProductColorDetails($row->id);
					$data[$counter]['p_size'] = self::getProductSizeDetails($row->id);
					$data[$counter]['p_image'] = self::getProductImageDetails($row->id);
					$counter++;
				}
			}
		return $data;
	}
	
	public static function getProductsListpppp($cond = null , $limit = null, $cat = null){
		$select = DB::table('dajwari_products as c1')
			->select('c1.*', 'c2.cat_name')
			->leftjoin('dajwari_categories as c2', 'c1.cat_id', '=', 'c2.id')
			->where('c1.'.$cond.'', 1)
			->orderBy('c1.id', 'DESC')->get();	
		return $select;
	}
	
	public static function getProductColorDetails($id = null){
		$data = array();
		if($id <> '' && (integer)$id > 0){
			$query = DB::table('dajwari_products_colors as c1')
				->when($id, function ($query, $id) {
					 return $query->where('c1.p_id', $id);
				})
				->orderBy('c1.color_name', 'ASC')->get();	
				if ($query) {
					foreach ($query as $row) {
						$data[] = $row->color_name;
					}
				}
			return $data;
		}
	}
		
	public static function getProductSizeDetails($id = null){
		$data = array();
		if($id <> '' && (integer)$id > 0){
			$query = DB::table('dajwari_products_sizes as c1')
				->when($id, function ($query, $id) {
					 return $query->where('c1.p_id', $id);
				})
				->orderBy('c1.p_size', 'ASC')->get();	
				if ($query) {
					foreach ($query as $row) {
						$data[] = $row->p_size;
					}
				}
			return $data;
		}
	}
	
	public static function getProductImageDetails($id = null){
		$data = array();
		if($id <> '' && (integer)$id > 0){
			$query = DB::table('dajwari_products_images as c1')
				->when($id, function ($query, $id) {
					 return $query->where('c1.p_id', $id);
				})
				->orderBy('c1.image', 'ASC')->get();	
				if ($query) {
					foreach ($query as $row) {
						$data[] = $row->image;
					}
				}
			return $data;
		}
	}
	
	public static function getHomeBanners(){
		$data = array();
		$query = DB::table('dajwari_images as c1')
			->orderBy('c1.img_name', 'ASC')->get();	
			if ($query) {
				foreach ($query as $row) {
					$data[$row->id] = $row;
				}
			}
		return $data;
	}
	
	public static function getMenuItems(){
		$data = array();
		$query = DB::table('dajwari_categories')->where('parent_id', 0)->get();	
			if ($query) {
				foreach ($query as $row) {
					$row = (array) $row;
					$data[$row['id']] = $row;
					$query1 = DB::table('dajwari_categories')->where('parent_id', $row['id'])->get();
					if($query1){
						foreach ($query1 as $row1){
							$row1 = (array) $row1;
							$data[$row['id']]['childs'][$row1['id']] = $row1;
							$query2 = DB::table('dajwari_categories')->where('parent_id', $row1['id'])->get();
							if($query2){
								foreach ($query2 as $row2){
									$row2 = (array) $row2;
									$data[$row['id']]['childs'][$row1['id']]['childs'][$row2['id']] = $row2;
								}
							}
						}
					}
				}
			}
		return $data;
	}
  
}
?>