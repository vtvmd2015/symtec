<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class salesperson extends Sximo  {
	
	protected $table = 'salespersons_t';
	protected $primaryKey = 'salesperson_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT salespersons_t.* FROM salespersons_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE salespersons_t.salesperson_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
