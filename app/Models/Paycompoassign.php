<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class paycompoassign extends Sximo  {
	
	protected $table = 'py_paycompo_assign_t';
	protected $primaryKey = 'paycombonent_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT py_paycompo_assign_t.* FROM py_paycompo_assign_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE py_paycompo_assign_t.paycombonent_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
