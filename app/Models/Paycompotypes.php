<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class paycompotypes extends Sximo  {
	
	protected $table = 'py_paycombo_types_t';
	protected $primaryKey = 'compotype_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT py_paycombo_types_t.* FROM py_paycombo_types_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE py_paycombo_types_t.compotype_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
