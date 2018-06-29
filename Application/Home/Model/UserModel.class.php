<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/27
 * Time: 10:09
 */
namespace Home\Model;

use Think\Model;

class UserModel extends Model{

    //验证
    protected $_validate = array(
        array('username','require','用户名不得为空'),
    );

    //查重用户名
    public function selectUserByName($user_name){
        $condition['username'] = $user_name;
        $result = M('User')->where($condition)->find();
        return $result;
    }
    //查重密码
    public function selectUserByPwd($user_pwd){
        $condition['password'] = $user_pwd;
        $result = M('User')->where($condition)->select();
        return $result;
    }
    //插入数据
    public function insertUserInfo($data){
        var_dump($data);
        $result = M('User') -> add($data);
        return $result;
    }

}
