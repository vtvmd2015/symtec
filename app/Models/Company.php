<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class company extends Sximo  {
	
	protected $table = 'company_t';
	protected $primaryKey = 'company_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT company_t.* FROM company_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE company_t.company_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
