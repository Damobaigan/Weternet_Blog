<?php
namespace Home\Controller;
use Home\Model\InfoModel;
use Think\Controller;
use Think\Model;

/**
 *
 */
class LoginController extends Controller{

	public function index(){

		//***
        $this->display();
	}

    public function register(){
        $this->display();
    }

	//注册
	public function regis()
    {
        //$user = new Model('Info');
        //var_dump($user->select());
        //$user = new InfoModel();
        //var_dump($user->select());
        //$user = D('Admin/Info');
        //$user = D("Info");
        //实例化UserModel
        $userModel = D('User');
        $user_name = I('post.username');
        $user_pwd = I('post.password');
        $user_name_info = $userModel -> selectUserByName($user_name);
        $user_pwd_info = $userModel -> selectUserByPwd($user_pwd);
        if(empty($user_name_info)){
            echo "<script>alert('Bad Name!')</script>";
        }else{
            //插入数据
            $data['username']=$user_name;
            $data['password']=$user_pwd;
            //var_dump($data);
            $userModel -> insertUserInfo($data);
            //var_dump($result);
        }

    }
    //登录
	public function login(){
	    $user_name = I('post.username',"");
        var_dump($user_name);
	    $user_pwd = I('post.password',"");
	    $userModel = D('User');
	    $user_name_info = $userModel -> selectUserByName($user_name);

			//非空判断
			if(empty($user_name)){
					$this->ajaxReturn(array('info'=>'请输入用户名!','status'=>'0'));
			}else if(empty($user_pwd)){
					$this->ajaxReturn(array('info'=>'请输入密码！','status'=>'0'));
			}

			//输入信息判断
        if(empty($user_name_info)){
            echo '<script language="javascript">
                alert("没有注册，请注册！");
                location.href="/MyPHP/Login";
                document.onmousedown=click;
            </script>';
        }elseif ($user_pwd!=$user_name_info['password']) {
            echo '<script language="javascript">
                alert("输入的用户名或密码不正确，请重新输入@");
                location.href="/MyPHP/Login";
                document.onmousedown=click;
            </script>';
        }else echo "登陆成功！";

    }
}
