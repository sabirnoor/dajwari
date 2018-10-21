<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class Pages extends Model {

    protected $table = 'static_pages';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'timestamp'];

    	
	public static function getPageContent($id = null) {
        $data = array();
        if ($id <> '' && (integer) $id > 0) {
            $query = DB::table('static_pages as c1')
                            ->when($id, function ($query, $id) {
                                return $query->where('c1.id', $id);
                            })
                            ->orderBy('c1.id', 'ASC')->get();
            if ($query) {
                foreach ($query as $row) {
                    $data['page_title'] = $row->page_title;
					$data['page_content'] = $row->page_content;
                }
            }
			
            return $data;
        }
    }


}

?>