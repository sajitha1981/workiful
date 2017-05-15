<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model {
	
	public function getCountryDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_country_master')->orderBy('country_name', $orderby)->paginate($npage);
		//$eduList = DB::select( DB::raw("SELECT * FROM raz_country_master ORDER BY country_name DESC") );
		//echo '<pre>';
		//print_r($eduList);exit;
		return $eduList;
	}
	public function getCountryCount () {
		
		$eduCnt = DB::table('raz_country_master')->select('country_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delCountry ($delids, $tp) {
		
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
						DB::table('raz_country_master')->where('country_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_country_master')->where('country_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}