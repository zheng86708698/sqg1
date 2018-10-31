<?php
namespace app\admin\controller;

class Index
{
    public function index()
    {
    	//$list = \app\common\service\Admin::newOne(1,2,3,4,5);
    	//$list = \app\common\service\Admin::delOne(2);
    	// $a['pwd'] = 12345;
    	
    	// $a['email'] = '2312@qq.com';
    	
    	// $list = \app\common\service\Admin::setOne(3,$a);
    	//$list = \app\common\service\Admin::getOne(3);
  		$destroy['adminid'] = 1;
		$destroy['classifiedid'] = 2;
		//$lists =['name'=>'5gfdsfdsf'];
		$lists['name'] = '3213121';
		// $arra['pwd'] = 1232133123;

		// $arra['asdsa'] = 'sadsad';
		$arra = [
    [ 'goodsid'=>1, 'imageurl'=>'thinkphp@qq.com','deqdea'=>'fdasfs'],
    [ 'goodsid'=>1, 'imageurl'=>'onethink@qq.com'],
	];

		// $arra['goodsid'] = 1;
		// $arra['imageurl'] = 'efesffd';
		$aa = new \app\common\service\GoodsCat;
    	$list =  $aa::getList(1);
    	//$list = get_object_vars($list);
    	//$str = preg_split("/[\s,]+/",'大码,男装');
    	$condition['starttime'] = 
    	$condition['endtime'] = time();
    	new \app\common\service\GoodsCat;
		$list =  $aa::getList($condition);
        dump($list);
        
    }
}
