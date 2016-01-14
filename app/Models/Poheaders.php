<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class poheaders extends Sximo  {
	
	protected $table = 'po_headers_t';
	protected $primaryKey = 'po_header_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT po_headers_t.* FROM po_headers_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE po_headers_t.po_header_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
