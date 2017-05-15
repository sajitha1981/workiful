<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exceptions;
//use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
use App\AddonsModel;
class AddonsController extends Controller {

	
	public $AdminURL;
	public $LogMsg;
	public function __construct()
	{
		$common =  new \App\Services\Common;
		$CommonData = $common->config();
		$this->AdminURL = $CommonData['AdminURL'];
		$this->LogMsg = $CommonData['LogMsg'];
	}
    public function listEducation()
    {
        if (session('sesAdminID') == null ) {
			$data = array(
					'msg'=>''
					);
			return view($this->AdminURL.'.login')->with($data);
			
		} else {
			
			$data = array(
					'msg'=>$this->LogMsg
					);
			return view($this->AdminURL.'.manage-education')->with($data);
		}
		
    }
	public function validateform (Request $request){
      
		try {
			$this->validate($request,[
				//'Username'=>'required|max:8',
				'Username'=>'required',
				'Password'=>'required'
			]);
			$Username = $request->input('Username');
			$Password    = $request->input('Password');
			$encls = new \App\Services\Encoderclass;
			$EncodeCls = $encls->Encoderclass($Password,'encode');
			try {
				//$get =  new \App\LoginModel;
				$get =  new LoginModel();
				$memberExist = $get->getUserDetails ($Username, $EncodeCls);
				/*$memberExist = DB::table('raz_settings')->where([
						 ['settings_username', '=', $Username],
						 ['settings_password', '=', $EncodeCls],
						 ])->get();*/
			} catch (\Exception $e) {
				return redirect($this->AdminURL.'/error');
			}
			if (count ($memberExist) > 0 ) {				
				foreach ($memberExist as $val) {
					
					session(['sesAdminID' => $val->settings_id]);
					session(['sesAdminUserID' => $val->settings_username]);
					session(['sesAdminType' => $val->settings_type]);
					session(['sesAdminautoID' => $val->settings_autoID]);
					session(['sesAdminname' => stripslashes(stripslashes(trim($val->settings_fname)))." ".stripslashes(stripslashes(trim($val->settings_lname)))]);
					return redirect($this->AdminURL.'/dashboard');
				}
			} else {
				
				$data = array(
							'msg'=>$this->LogMsg
						);
				return view($this->AdminURL.'.login')->with($data);
				
				
			}
		} catch (\Exception $e) {
			//print_r($e->getMessage());exit;
			return redirect($this->AdminURL.'/error');
		}
					
    }

   

}