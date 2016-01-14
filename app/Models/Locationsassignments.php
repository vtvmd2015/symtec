<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class locationsassignments extends Sximo  {
	
	protected $table = 'locations_assignment_t';
	protected $primaryKey = 'locationassignment_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT locations_assignment_t.* FROM locations_assignment_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE locations_assignment_t.locationassignment_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
