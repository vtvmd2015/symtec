<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class rolesdetails extends Sximo  {
	
	protected $table = 'roles_details_t';
	protected $primaryKey = 'role_detail_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT roles_details_t.* FROM roles_details_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE roles_details_t.role_detail_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
