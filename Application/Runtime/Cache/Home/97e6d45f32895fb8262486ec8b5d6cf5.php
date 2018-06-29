<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <style>
    	
    	html,body{
    		height: 100%;
    	}

    	div.login_page{
    		height: 100%;
    		border: 1px;
    		margin: 0;
    		padding: 0;
    	}

    	div.login_sheet{
    		width: 30%;
    		height: 40%;
    		margin-left: 35%;
    		margin-top: 15%;
    		float: left;
    		border: 1px solid black;
    		background-color: white;
    		text-align: center;
    	}

    </style>
</head>
<body>
	<div class="login_page">
		<div class="login_sheet" >
			<form method="post" action="/MyPHP/Home/Login/regis"  >
				<div style="height: 80px;line-height: 80px;">用户名：<input type="text" name="username" placeholder="请输入用户名！"></div>
				<div style="height: 80px;line-height: 80px;">密&nbsp;&nbsp;码：<input type="text" name="password" placeholder="请输入密码！"></div>
				<div style="height: 40px;line-height: 40px;"><input type="submit" name="submit" value="注册"></div>
			</form>
		</div>
	</div>
</body>

<script type="text/javascript">
	
	function validate_required(field,alerttext){
		with(field)
		{
			if(value==null||value=""){
				alert(alerttext);
				return flase;
			}else return true;
		}
	}

	function validate_form(thisform) {
		with(thisform){
			if(validate_required(username,"用户名没有填写！")==flase){
				username.focus();
				return flase;
			}
		}
	}

</script>

</html>