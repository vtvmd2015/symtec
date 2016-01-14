<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accounttypes extends Sximo  {
	
	protected $table = 'account_types_t';
	protected $primaryKey = 'accounttype_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_types_t.* FROM account_types_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_types_t.accounttype_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
