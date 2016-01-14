<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class usertype extends Sximo  {
	
	protected $table = 'user_type_t';
	protected $primaryKey = 'user_type_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT user_type_t.* FROM user_type_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE user_type_t.user_type_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
