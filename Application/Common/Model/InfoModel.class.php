<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/26
 * Time: 11:03
 */
namespace Common\Model;

use Think\Model;

class InfoModel extends Model{

    public function __construct(){
        parent::__construct();
        echo "This is Common InfoModel!";
    }

}
