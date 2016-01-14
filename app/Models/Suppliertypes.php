<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class suppliertypes extends Sximo  {
	
	protected $table = 'supplier_type_t';
	protected $primaryKey = 'supplier_type_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT supplier_type_t.* FROM supplier_type_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE supplier_type_t.supplier_type_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
