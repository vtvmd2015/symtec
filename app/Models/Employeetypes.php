<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class employeetypes extends Sximo  {
	
	protected $table = 'employee_types_t';
	protected $primaryKey = 'emp_type_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT employee_types_t.* FROM employee_types_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE employee_types_t.emp_type_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
