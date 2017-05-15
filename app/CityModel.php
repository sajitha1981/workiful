<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model {
	
	public function getCityDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_city_master')->join('raz_state_master', 'raz_state_master.state_id', '=', 'raz_city_master.city_state')
		->join('raz_country_master', 'raz_state_master.state_country', '=', 'raz_country_master.country_id')->orderBy('raz_city_master.city_name', $orderby)->paginate($npage);
		//$eduList = DB::select( DB::raw("SELECT * FROM raz_city_master ORDER BY city_name DESC") );
		//echo '<pre>';
		//print_r($eduList);exit;
		return $eduList;
	}
	public function getCityCount () {
		
		$eduCnt = DB::table('raz_city_master')->join('raz_state_master', 'raz_state_master.state_id', '=', 'raz_city_master.city_state')
		->join('raz_country_master', 'raz_state_master.state_country', '=', 'raz_country_master.country_id')->select('raz_city_master.city_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delCity ($delids, $tp) {
		
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
						DB::table('raz_city_master')->where('city_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_city_master')->where('city_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}