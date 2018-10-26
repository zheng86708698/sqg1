<?php
namespace app\common\model;
class Eval extends Base{
	
	public function member(){
	    return $this->belongsTo("Member","memberid");
	}
	public function goods(){
	    return $this->belongsTo("GoodsSpec","goodsid");
	}
	public function goodsOrder(){
	    return $this->belongsTo("GoodsOrder","orderid");
	}
	
}