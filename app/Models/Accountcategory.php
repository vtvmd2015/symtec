<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class accountcategory extends Sximo  {
	
	protected $table = 'account_category_t';
	protected $primaryKey = 'accountcategory_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT account_category_t.* FROM account_category_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE account_category_t.accountcategory_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
