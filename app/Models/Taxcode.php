<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class taxcode extends Sximo  {
	
	protected $table = 'tax_code_t';
	protected $primaryKey = 'taxcode_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tax_code_t.* FROM tax_code_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tax_code_t.taxcode_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
