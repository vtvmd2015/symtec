<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accountcurrency extends Sximo  {
	
	protected $table = 'account_currency_t';
	protected $primaryKey = 'currecncy_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_currency_t.* FROM account_currency_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_currency_t.currecncy_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
