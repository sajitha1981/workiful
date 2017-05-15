<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class StateModel extends Model {
	
	public function getStateDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_state_master')->join('raz_country_master', 'raz_state_master.state_country', '=', 'raz_country_master.country_id')->orderBy('raz_state_master.state_name', $orderby)->paginate($npage);
		//$eduList = DB::select( DB::raw("SELECT * FROM raz_state_master ORDER BY state_name DESC") );
		//echo '<pre>';
		//print_r($eduList);exit;
		return $eduList;
	}
	public function getStateCount () {
		
		$eduCnt = DB::table('raz_state_master')->join('raz_country_master', 'raz_state_master.state_country', '=', 'raz_country_master.country_id')->select('raz_state_master.state_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delState ($delids, $tp) {
		
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
						DB::table('raz_state_master')->where('state_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_state_master')->where('state_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}