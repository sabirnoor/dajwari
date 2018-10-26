<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class Products extends Model {

    protected $table = 'dajwari_products';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'timestamp'];

    public static function getCustomerFav() {
        $data = DB::table('dajwari_products as c1')
                        ->where('c1.p_customer_fav', 1)
                        ->orderBy('c1.id', 'DESC')->get();
        return $data;
    }

    public static function getProductsList($cond = null, $limit = null, $cat = null) {
        $data = array();
        $select = DB::table('dajwari_products as c1')
                        ->select('c1.*', 'c2.cat_name')
                        ->leftjoin('dajwari_categories as c2', 'c1.cat_id', '=', 'c2.id')
                        ->when($cond, function ($query, $cond) {
                            if (count($cond)) {
                                foreach ($cond as $key => $val) {
                                    return $query->where('c1.' . $key . '', '' . $val . '');
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

    public static function getProductsListpppp($cond = null, $limit = null, $cat = null) {
        $select = DB::table('dajwari_products as c1')
                        ->select('c1.*', 'c2.cat_name')
                        ->leftjoin('dajwari_categories as c2', 'c1.cat_id', '=', 'c2.id')
                        ->where('c1.' . $cond . '', 1)
                        ->orderBy('c1.id', 'DESC')->get();
        return $select;
    }

    public static function getProductColorDetails($id = null) {
        $data = array();
        if ($id <> '' && (integer) $id > 0) {
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

    public static function getProductSizeDetails($id = null) {
        $data = array();
        if ($id <> '' && (integer) $id > 0) {
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

    public static function getProductImageDetails($id = null) {
        $data = array();
        if ($id <> '' && (integer) $id > 0) {
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

    public static function getHomeBanners() {
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

    public static function getMenuItems() {
        $data = array();
        $query = DB::table('dajwari_categories')->where('parent_id', 0)->get();
        if ($query) {
            foreach ($query as $row) {
                $row = (array) $row;
                $data[$row['id']] = $row;
                $query1 = DB::table('dajwari_categories')->where('parent_id', $row['id'])->get();
                if ($query1) {
                    foreach ($query1 as $row1) {
                        $row1 = (array) $row1;
                        $data[$row['id']]['childs'][$row1['id']] = $row1;
                        $query2 = DB::table('dajwari_categories')->where('parent_id', $row1['id'])->get();
                        if ($query2) {
                            foreach ($query2 as $row2) {
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

    public static function getTrendingMenu($limit = null) {
        $select = DB::table('dajwari_categories as c1')
                        ->select('c1.id', 'c1.cat_name', DB::raw("count(c1.id) as countTotal"))
                        ->join('dajwari_products as c2', 'c1.id', '=', 'c2.cat_id')
                        ->when($limit, function ($query, $limit) {
                            return $query->limit($limit);
                        })
                        ->groupBy('c1.id', 'c1.cat_name')->get();
        return $select;
        ///->inRandomOrder()
    }

    public static function getBrowseProductsList($cond = array(), $limit = 20, $cat = '') {
		
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
                        ->when($cat, function ($query, $cat) {
                            return $query->where('c2.cat_name', 'like', '%' . $cat . '%');
                        })
						->groupBy('c1.id', 'c1.cat_id', 'c1.p_name', 'c1.p_code', 'c1.p_short_desc', 'c1.p_fabric', 'c1.p_weight', 'c1.p_price', 'c1.p_availablity', 'c1.p_dispatch', 'c1.p_long_desc', 'c1.stiching_cost', 'c1.p_qty', 'c2.cat_name')->orderBy('c1.id', 'DESC')->get(); //->paginate($limit)
						
						/* ->when($cond, function ($query, $cond) {
                            if (count($cond)) {
                                foreach ($cond as $key => $val) {
                                    return $query->where('c1.' . $key . '', '' . $val . '');
                                }
                            }
                        }) */
						
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
		
		$Filterdata['filter_fabric'] = self::getfilterfabric('', $cat);
        $Filterdata['filter_color'] = self::getfiltercolor('', $cat);
        $Filterdata['filter_size'] = self::getfiltersize('', $cat);
        $Filterdata['filter_dispatch'] = self::getfilterdispatch('', $cat);
        $Filterdata['total_records'] = $select->count();
		
		return array('data' => $data, 'Filterdata' => $Filterdata);
        //return $select;
    }

    public static function getDajwariProductDetails($id = '', $name = false) {
        $data = array();
        if ($name) {
            $name = str_replace("_", " ", $id);
            $result = DB::table('dajwari_products')->where('p_name', $name)->first();
            if ($result) {
                $id = $result->id;
            }
        }
        if($id <> '' && (integer)$id > 0) {
            $row = DB::table('dajwari_products')->select('dajwari_products.*', 'c2.fabric_name')->leftjoin('dajwari_fabric as c2', 'dajwari_products.p_fabric', '=', 'c2.id')->where('dajwari_products.id', $id)->first();
            $data['p_details'] = $row;
            $data['p_color'] = self::getProductColorDetails($row->id);
            $data['p_size'] = self::getProductSizeDetails($row->id);
            $data['p_image'] = self::getProductImageDetails($row->id);
            //echo '<pre>';print_r($data);die;
            return $data;
        }
    }

    public static function get_dajwari_category_id($cat = '') {
        $data = 1;
        if ($cat == '') {
            return $data;
        }
        $query = DB::table('dajwari_categories as c1')->where('c1.cat_name', $cat)->get();
        if ($query) {
            $data = isset($query[0]) ? $query[0]->id : 1;
        }
        return $data;
    }

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

    public static function getfiltercolor($keywords = null, $cat = null) {
        $select = DB::table('dajwari_products_colors as c1')
                        ->select('c1.color_name', DB::raw("count(c1.color_name) as countTotal"))
                        ->join('dajwari_products as c2', 'c1.p_id', '=', 'c2.id')
                        ->leftjoin('dajwari_categories as c3', 'c2.cat_id', '=', 'c3.id')
                        ->when($keywords, function ($query, $keywords) {
                            return $query->where('c3.cat_name', 'like', '%' . $keywords . '%');
                        })
                        ->groupBy('c1.color_name')->get();
        return $select;
    }

    public static function getfiltersize($keywords = null, $cat = null) {
        $select = DB::table('dajwari_products_sizes as c1')
                        ->select('c1.p_size', DB::raw("count(c1.p_size) as countTotal"))
                        ->join('dajwari_products as c2', 'c1.p_id', '=', 'c2.id')
                        ->leftjoin('dajwari_categories as c3', 'c2.cat_id', '=', 'c3.id')
                        ->when($keywords, function ($query, $keywords) {
                            return $query->where('c3.cat_name', 'like', '%' . $keywords . '%');
                        })
                        ->groupBy('c1.p_size')->get();
        return $select;
    }

    public static function getfilterdispatch($keywords = null, $cat = null) {
        $select = DB::table('dajwari_products as c1')
                        ->select('c1.p_dispatch', DB::raw("count(c1.p_dispatch) as countTotal"))
                        ->leftjoin('dajwari_categories as c3', 'c1.cat_id', '=', 'c3.id')
                        ->when($keywords, function ($query, $keywords) {
                            return $query->where('c3.cat_name', 'like', '%' . $keywords . '%');
                        })
                        ->groupBy('c1.p_dispatch')->get();
        return $select;
    }

    /* public static function getfilterfabric($keywords = null, $cat = null){
      $select = DB::table('dajwari_products as c1')
      ->select('c1.p_fabric',DB::raw("count(c1.p_fabric) as countTotal"))
      ->leftjoin('dajwari_categories as c3', 'c1.cat_id', '=', 'c3.id')
      ->when($keywords, function ($query, $keywords) {
      return $query->where('c3.cat_name', 'like', '%'.$keywords.'%');
      })
      ->groupBy('c1.p_fabric')->get();
      return $select;
      } */

    public static function getfilterfabric($keywords = null, $cat = null) {
        $select = DB::table('dajwari_fabric as c1')
                        ->select('c1.fabric_name', 'c1.id', DB::raw("count(c1.fabric_name) as countTotal"))
                        ->join('dajwari_products as c2', 'c1.id', '=', 'c2.p_fabric')
                        ->leftjoin('dajwari_categories as c3', 'c2.cat_id', '=', 'c3.id')
                        ->when($keywords, function ($query, $keywords) {
                            return $query->where('c3.cat_name', 'like', '%' . $keywords . '%');
                        })
                        ->groupBy('c1.fabric_name', 'c1.id')->get();
        return $select;
    }

    public static function getHomeAdvts() {
        $data = array();
        $query = DB::table('dajwari_home_advt as c1')
                        ->orderBy('c1.home_id', 'ASC')->get();
        if ($query) {
            foreach ($query as $row) {
                $data[$row->home_id] = $row;
            }
        }
        return $data;
    }

    public static function getTestimonials() {
        $data = array();
        $query = DB::table('dajwari_testimonial as c1')
                        ->orderBy('c1.tes_id', 'ASC')->get();
        if ($query) {
            foreach ($query as $row) {
                $data[$row->tes_id] = $row;
            }
        }
        return $data;
    }

    public static function getBlogs() {
        $data = array();
        $query = DB::table('dajwari_blog as c1')
                        ->orderBy('c1.blog_id', 'ASC')->get();
        if ($query) {
            foreach ($query as $row) {
                $data[$row->blog_id] = $row;
            }
        }
        return $data;
    }

}

?>