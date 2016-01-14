<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class holidays extends Sximo  {
	
	protected $table = 'holiday_t';
	protected $primaryKey = 'holiday_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT holiday_t.* FROM holiday_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE holiday_t.holiday_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
