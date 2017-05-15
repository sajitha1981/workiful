<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class EducationModel extends Model {
	
	public function getEducationDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_education_master')->orderBy('education_name', $orderby)->paginate($npage);
		//$eduList = DB::select( DB::raw("SELECT * FROM raz_education_master ORDER BY education_name DESC") );
		//echo '<pre>';
		//print_r($eduList);exit;
		return $eduList;
	}
	public function getEducationCount () {
		
		$eduCnt = DB::table('raz_education_master')->select('education_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delEducation ($delids, $tp) {
		
		if ($tp == 'int_dels_sel' || $tp == 'int_dels' )
		{
			if ($delids != null)
			{

				$delids = substr($delids, 0, -1);
				$temps = explode(",", $delids);
				for ($i = 0; $i < count($temps); $i++)
				{
					if ($temps[$i] != null)
					{
						DB::table('raz_education_master')->where('education_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_education_master')->where('education_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}