<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exceptions;
use App\Http\Controllers\Controller;
use Session;
use App\EducationModel;
class EducationController extends Controller {

	
	public $AdminURL;
	public $LogMsg;
	public $numrecpage;
	public $curPage;
	public $defOrder;
	public function __construct()
	{
		$common =  new \App\Services\Common;
		$CommonData = $common->config();
		$this->AdminURL = $CommonData['AdminURL'];
		$this->LogMsg = $CommonData['LogMsg'];
		$this->numrecpage = $CommonData['numrecpage'];
		$this->curPage = "list-education";
		$this->defOrder = $CommonData['defOrder'];
	}
   // public function listEducation()
    public function index(Request $request)
    {
        if (session('sesAdminID') == null ) {
			return redirect($this->AdminURL.'/login');
			
		} else {
			try {
				
				$get =  new EducationModel();
				
				if ($request->ajax()) { 
					try {
				
						$npage = $request->input('npage');
						$orderby = $request->input('orderby');
						$delids = $request->input('delids');
						$page = $request->input('page');
						$tp = $request->input('tp');
						$stpage = ($page - 1) * $npage;
						$stcnt = $stpage + 1;
						$endcnt = $stpage + $npage;
						
						
						if ($tp != null && $delids != null) {
							$result = $get->delEducation($delids, $tp);
						}
						$eduList = $get->getEducationDetails($npage, $orderby);
						$eduCnt = $get->getEducationCount();
						if ($endcnt > $eduCnt)
						{
							$endcnt = $eduCnt;
						}
						
					} catch (\Exception $e) {
						
						return redirect($this->AdminURL.'/error');
					}
				
					return view('Master-Admin.educationload', ['eduList' => $eduList,
															   'msg'=>$this->LogMsg,'eduCnt'=>$eduCnt,
															   'stcnt'=>$stcnt,'endcnt'=>$endcnt
															  ])->render();  
				} else {
					try {
						$page = 1;
						$npage = $this->numrecpage;
						$orderby = $this->defOrder;
						$numresc = $npage;
						$stpage = ($page - 1) * $npage;
						$stcnt = $stpage + 1;
						$endcnt = $stpage + $npage;
						$eduList = $get->getEducationDetails($npage, $orderby);
						$eduCnt = $get->getEducationCount();
						
						if ($endcnt > $eduCnt)
						{
							$endcnt = $eduCnt;
						}
						if ($npage > $eduCnt)
						{
							$numresc = $eduCnt;
						}
						
						$data = array(
						'msg'=>$this->LogMsg,
						'eduList'=>$eduList,
						'eduCnt'=>$eduCnt,  
						'stcnt'=>$stcnt,
						'endcnt'=>$endcnt,
						'numresc'=>$numresc,
						'curPage'=>$this->curPage,
						'numrecpage'=>$this->numrecpage,
						'orderby'=>$orderby,
						'AdminURL'=>$this->AdminURL
						);
				
				
				
					} catch (\Exception $e) {
						
						return redirect($this->AdminURL.'/error');
					}
				}
				return view($this->AdminURL.'.manage-education')->with($data);
			} catch (\Exception $e) {
				
				return redirect($this->AdminURL.'/error');
			}	
		}
		
    }
	
	
	/*public function AddEditEducation (Request $request){
      
		if (session('sesAdminID') == null ) {
			return redirect($this->AdminURL.'/login');
			
		} else {
			if (!empty($request)) {
				try {
					$this->validate($request,[
						//'Username'=>'required|max:8',
						'education_name'=>'required'
					]);
					$education_name = $request->input('education_name');
					$education_status    = $request->input('education_status');
					
					try {
						//$get =  new \App\LoginModel;
						$get =  new EducationModel();
						
					} catch (\Exception $e) {
						return redirect($this->AdminURL.'/error');
					}
					
						return view($this->AdminURL.'.add-edit-education')->with($data);
						
						
					}
				} catch (\Exception $e) {
					//print_r($e->getMessage());exit;
					return redirect($this->AdminURL.'/error');
				}
			
			}
		}			
    }

	*/
	
	/*public function eduDelete(Request $request)
    {	
		 if (session('sesAdminID') == null ) {
			return redirect($this->AdminURL.'/login');
			
		} else {
			try {
				
				$get =  new EducationModel();
				
				if ($request->ajax()) { 
					try {
				
						//$rqtp = $request->input('rqtp');
						$delids = $request->input('delids');
						$tp = $request->input('tp');
						$npage = $request->input('npage');
						$orderby = $request->input('orderby');
						
						$result = $get->delEducation($delids, $tp);
						$eduList = $get->getEducationDetails($npage, $orderby);
						return view('Master-Admin.educationload', ['eduList' => $eduList,'msg'=>$this->LogMsg])->render();  
						
					} catch (\Exception $e) {
						
						return redirect($this->AdminURL.'/error');
					}
				
					//return view('Master-Admin.educationload', ['eduList' => $eduList,'msg'=>$this->LogMsg])->render();  
				} 
				
			} catch (\Exception $e) {
				
				return redirect($this->AdminURL.'/error');
			}	
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
				
				return redirect($this->AdminURL.'/login');
				
				
			}
		} catch (\Exception $e) {
			//print_r($e->getMessage());exit;
			return redirect($this->AdminURL.'/error');
		}
					
    }*/

   

}