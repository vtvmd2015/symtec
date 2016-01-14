<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class roles extends Sximo  {
	
	protected $table = 'roles_t';
	protected $primaryKey = 'role_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT roles_t.* FROM roles_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE roles_t.role_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
