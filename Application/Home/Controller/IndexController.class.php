<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){

        //$this->display（）;
        //读取配置文件信息，用大 C 函数
        //$test = C('DB_NAME');
        //var_dump($test);

        //动态加载配置:改变表前缀
        //$db_name = C('DB_PREFIX','login_');
        //$user = M('Info');
        //var_dump($user->select());

       $this->display();
    }

    public function test(){

        echo "This is a test message!";

    }
}