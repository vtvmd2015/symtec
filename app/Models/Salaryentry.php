<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class salaryentry extends Sximo  {
	
	protected $table = 'salary_entries_t';
	protected $primaryKey = 'salary_id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT salary_entries_t.* FROM salary_entries_t  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE salary_entries_t.salary_id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
