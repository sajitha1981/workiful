<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CareerModel extends Model {
	
	public function getCareerDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_career_master')->orderBy('career_name', $orderby)->paginate($npage);
		return $eduList;
	}
	public function getCareerCount () {
		
		$eduCnt = DB::table('raz_career_master')->select('career_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delCareer ($delids, $tp) {
		
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
						DB::table('raz_career_master')->where('career_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_career_master')->where('career_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}