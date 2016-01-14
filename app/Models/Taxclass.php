<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class taxclass extends Sximo  {
	
	protected $table = 'tax_class_t';
	protected $primaryKey = 'taxclass_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tax_class_t.* FROM tax_class_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tax_class_t.taxclass_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
