<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class leaveentry extends Sximo  {
	
	protected $table = 'leaves_t';
	protected $primaryKey = 'leave_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT leaves_t.* FROM leaves_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE leaves_t.leave_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
