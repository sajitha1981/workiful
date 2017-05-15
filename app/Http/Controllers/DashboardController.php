<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
class DashboardController extends Controller {

	
	public $AdminURL;
	public $SesMsg;

	public function __construct()
	{
		$common =  new \App\Services\Common;
		$CommonData = $common->config();
		$this->AdminURL = $CommonData['AdminURL'];
		$this->SesMsg = $CommonData['SesMsg'];
		
	}
    public function dashboard()
    {
        if (session('sesAdminID') != null ) {
			$data = array(
					'msg'=>''
					);
			return view($this->AdminURL.'.dashboard')->with($data);
		} else {
			
			return redirect($this->AdminURL.'/login');
		}
    }
	

}