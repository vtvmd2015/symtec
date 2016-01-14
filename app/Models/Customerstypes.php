<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class customerstypes extends Sximo  {
	
	protected $table = 'customer_types_t';
	protected $primaryKey = 'customer_type_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT customer_types_t.* FROM customer_types_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE customer_types_t.customer_type_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
