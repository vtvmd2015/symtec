<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class employee extends Sximo  {
	
	protected $table = 'employee_t';
	protected $primaryKey = 'employee_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT employee_t.* FROM employee_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE employee_t.employee_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
