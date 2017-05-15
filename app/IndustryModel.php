<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class IndustryModel extends Model {
	
	public function getIndustryDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_industry_master')->orderBy('industry_name', $orderby)->paginate($npage);
		return $eduList;
	}
	public function getIndustryCount () {
		
		$eduCnt = DB::table('raz_industry_master')->select('industry_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delIndustry ($delids, $tp) {
		
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
						DB::table('raz_industry_master')->where('industry_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_industry_master')->where('industry_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}