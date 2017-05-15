<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model {
	
	public function getUserDetails ($Username, $EncodeCls) {
		
		$memberExist = DB::table('raz_settings')->where([
					 ['settings_username', '=', $Username],
					 ['settings_password', '=', $EncodeCls],
					 ])->get();
		return $memberExist;
	}
	
}