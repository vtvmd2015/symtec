<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class viewaccountperiods extends Sximo  {
	
	protected $table = 'account_periods_t';
	protected $primaryKey = 'period_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_periods_t.* FROM account_periods_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_periods_t.period_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
