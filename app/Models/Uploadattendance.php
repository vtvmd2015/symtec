<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class uploadattendance extends Sximo  {
	
	protected $table = 'upload_attendance';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT upload_attendance.* FROM upload_attendance  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE upload_attendance.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
