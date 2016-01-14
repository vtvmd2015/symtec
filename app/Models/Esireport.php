<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class esireport extends Sximo  {
	
	protected $table = 'esi_reports_v';
	protected $primaryKey = '';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT esi_reports_v.* FROM esi_reports_v  ";
	}	

	public static function queryWhere(  ){
		
		return "  ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
