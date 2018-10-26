<?php
namespace app\common\model;
class GoodsOrder extends Base{
	
	public function goodsOrderSpec(){
	    return $this->hasMany("GoodsOrderSpec","orderid");
	}
	public function eval(){
	    return $this->hasOne("Eval","orderid");
	}
	public function goodsOrderGoods(){
	    return $this->hasMany("GoodsOrderGoods","orderid");
	}
	public function member(){
		return $this->belongsTo("Member","memberid");
	}
	public function goodsGroup(){
		return $this->belongsTo("GoodsGroup","Groupid");
	}
}