<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class JobcategoryModel extends Model {
	
	public function getJobcategoryDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_job_category')->orderBy('raz_job_category_name', $orderby)->paginate($npage);
		return $eduList;
	}
	public function getJobcategoryCount () {
		
		$eduCnt = DB::table('raz_job_category')->select('raz_job_category_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delJobcategory ($delids, $tp) {
		
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
						DB::table('raz_job_category')->where('raz_job_category_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_job_category')->where('raz_job_category_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}