<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class potaxes extends Sximo  {
	
	protected $table = 'po_taxes_t';
	protected $primaryKey = 'po_tax_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT po_taxes_t.* FROM po_taxes_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE po_taxes_t.po_tax_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
