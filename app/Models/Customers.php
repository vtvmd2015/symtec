<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class customers extends Sximo  {
	
	protected $table = 'customers_t';
	protected $primaryKey = 'customer_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT customers_t.* FROM customers_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE customers_t.customer_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
