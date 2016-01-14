<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class currencyentry extends Sximo  {
	
	protected $table = 'currency_t';
	protected $primaryKey = 'currecncy_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT currency_t.* FROM currency_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE currency_t.currecncy_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
