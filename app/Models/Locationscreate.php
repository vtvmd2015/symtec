<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class locationscreate extends Sximo  {
	
	protected $table = 'locations_t';
	protected $primaryKey = 'location_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT locations_t.* FROM locations_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE locations_t.location_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
