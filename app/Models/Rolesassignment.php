<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class rolesassignment extends Sximo  {
	
	protected $table = 'roles_assignments_t';
	protected $primaryKey = 'assignment_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT roles_assignments_t.* FROM roles_assignments_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE roles_assignments_t.assignment_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
