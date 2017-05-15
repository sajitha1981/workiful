<?php
namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class CouponModel extends Model {
	
	public function getCouponDetails ($npage, $orderby) {
		
		$eduList = DB::table('raz_coupon_master')->orderBy('coupon_code', $orderby)->paginate($npage);
		return $eduList;
	}
	public function getCouponCount () {
		
		$eduCnt = DB::table('raz_coupon_master')->select('coupon_id');
		$count  = $eduCnt->count();
		return $count;
	}
	public function delCoupon ($delids, $tp) {
		
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
						DB::table('raz_coupon_master')->where('coupon_id',addslashes($temps[$i]))->delete();;
						
					
					}
				}
				return "suc";
			}
		}
		
		if ($tp == 'int_del')
		{	
			if ($delids != null)
			{
				
				DB::table('raz_coupon_master')->where('coupon_id',addslashes($delids))->delete();;
						
				return "suc";
			}
			
		}
		
	}
	
}