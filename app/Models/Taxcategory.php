<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class taxcategory extends Sximo  {
	
	protected $table = 'tax_category_t';
	protected $primaryKey = 'taxcategory_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tax_category_t.* FROM tax_category_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tax_category_t.taxcategory_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
