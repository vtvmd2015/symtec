<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class polines extends Sximo  {
	
	protected $table = 'po_lines_t';
	protected $primaryKey = 'po_lines_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT po_lines_t.* FROM po_lines_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE po_lines_t.po_lines_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
