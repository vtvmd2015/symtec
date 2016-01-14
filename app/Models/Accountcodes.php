<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accountcodes extends Sximo  {
	
	protected $table = 'account_codes_t';
	protected $primaryKey = 'accountcode_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_codes_t.* FROM account_codes_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_codes_t.accountcode_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
