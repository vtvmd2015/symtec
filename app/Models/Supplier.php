<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class supplier extends Sximo  {
	
	protected $table = 'supplier_t';
	protected $primaryKey = 'supplier_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT supplier_t.* FROM supplier_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE supplier_t.supplier_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
