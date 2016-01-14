<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class attendenceimport extends Sximo  {
	
	protected $table = 'attendence_import_t';
	protected $primaryKey = 'import_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT attendence_import_t.* FROM attendence_import_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE attendence_import_t.import_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
