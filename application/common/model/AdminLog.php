<?php
namespace app\common\model;
class MemberFeeLog extends Base{
	
	public function admin(){
	    return $this->belongsTo("Admin","adminid");
	}
	
	
}