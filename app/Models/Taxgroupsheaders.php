<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class taxgroupsheaders extends Sximo  {
	
	protected $table = 'tax_groups_header_t';
	protected $primaryKey = 'taxgroup_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tax_groups_header_t.* FROM tax_groups_header_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tax_groups_header_t.taxgroup_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
