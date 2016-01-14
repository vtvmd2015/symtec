<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accountclass extends Sximo  {
	
	protected $table = 'account_class_t';
	protected $primaryKey = 'accountclass_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_class_t.* FROM account_class_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_class_t.accountclass_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
