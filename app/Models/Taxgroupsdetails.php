<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class taxgroupsdetails extends Sximo  {
	
	protected $table = 'tax_groups_details_t';
	protected $primaryKey = 'taxgroupdetail_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tax_groups_details_t.* FROM tax_groups_details_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tax_groups_details_t.taxgroupdetail_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
