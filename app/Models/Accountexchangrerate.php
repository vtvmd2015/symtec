<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accountexchangrerate extends Sximo  {
	
	protected $table = 'account_exchangerates_t';
	protected $primaryKey = 'exchangerate_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_exchangerates_t.* FROM account_exchangerates_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_exchangerates_t.exchangerate_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
