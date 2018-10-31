<?php
namespace app\admin\controller;
use think\Controller;
use think\Cache;
class Login extends Controller
{   
    public function login(){
        // $name = input('post.name');
        // $pwd = input('post.pwd');
        $name = "nkxsx";
        $pwd = "sdsf";
        
        $login =\app\common\service\Admin::login($name,$pwd);
        dump($login);
    	return $this->fetch();
    }

}
