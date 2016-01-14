<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class calendar extends Sximo  {
	
	protected $table = 'emp_calender_v';
	protected $primaryKey = 'employee_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT emp_calender_v.* FROM emp_calender_v  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE emp_calender_v.employee_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
