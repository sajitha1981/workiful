<?php namespace App\Services;

class Common{
	
	public $commonData = array();
	public function config () {
		$commonData['AdminURL'] = 'Master-Admin';
		$commonData['numrecpage'] = 10;
		$commonData['defOrder'] = 'ASC';
		$commonData['LogMsg'] = 'Incorrect username or password';
		$commonData['SesMsg'] = 'Session expired!!! Please try again.';
		return $commonData;
	}
}
?>