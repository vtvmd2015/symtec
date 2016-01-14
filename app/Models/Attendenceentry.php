<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class attendenceentry extends Sximo  {
	
	protected $table = 'attendence_t';
	protected $primaryKey = 'attendence_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT attendence_t.* FROM attendence_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE attendence_t.attendence_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
