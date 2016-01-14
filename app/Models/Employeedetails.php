<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class employeedetails extends Sximo  {
	
	protected $table = 'employee_details_t';
	protected $primaryKey = 'emp_detail_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT employee_details_t.* FROM employee_details_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE employee_details_t.emp_detail_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
