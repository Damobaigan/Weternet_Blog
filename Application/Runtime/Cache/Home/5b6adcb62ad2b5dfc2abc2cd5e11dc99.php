<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Weternet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
	<link rel="stylesheet" href="./Public/css/index.css">
	<link rel="stylesheet" href="./Public/css/login.css">
</head>
<body>
	<div class="header">
		<div class="search">
			<form method="post">
				<p><input type="text" class="keywords" name="">
				<button type="submit">搜索</button></p>
			</form>
		</div>
		<div class="userinfo">
			<a href="Login"><font style="color: #454545;">用户中心</font></a>
		</div>
	</div>
	<div class="navi">
		<table style="height: 100%;margin-left: 25px;">
			<tr>
				<td><a href="Index">首页</a></td>
				<td><a href="#">文章</a></td>
				<td><a href="#">新闻</a></td>
				<td><a href="#">视频</a></td>
				<td><a href="#">联系我么</a></td>
				<td><a href="#">其它</a></td>
			</tr>
		</table>
	</div>
	<div class="left_bar">
		<div class="artical_list">
			<a href="#"><font style="font-size: 25px;">文章列表</font></a>
			<a href="#">###</a>
			<a href="#">####</a>
			<a href="#">######</a>
			<a href="#">###</a>
			<a href="#">####</a>
		</div>
		<div class="tag">
			<a href="#"><font style="font-size: 25px;">标签</font></a>
			<a href="#">#编程</a>
			<a href="#">#科技</a>
			<a href="#">#记录</a>
		</div>
	</div>

<div class="login_box">
	<form method="post" action="Login/login">
			<div style="width: 100%;height:50px;"></div>
			<div style="text-align: center;">
				<input type="text" name="username" id="uname" placeholder="&nbsp;用户名" onchange="validata_uname()">
			</div>
			<div style="width: 100%;height: 30px"></div>
			<div style="text-align: center;">
				<input type="text" name="password" id="pwd" placeholder="&nbsp;密  码" onchange="validata_pwd()">
			</div>
			<div style="width: 100%;height: 20px;"></div>
			<div style="text-align: center;">
				<button type="submit">登录</button>&nbsp;&nbsp;&nbsp;
				<button type="button" onclick="rg()">注册</button>
				<p id='request'></p>
			</div>
	</form>

</div>
</body>
</html>

<script type="text/javascript">

	function rg(){
		window.location.href="Login/register";
	}

	function validate_uname(){
		var data = document.getElementById('uname').value;
		if(data="zhang"){
			document.getElementById('request').innerHTML='用户名不能为空！';
		}
	}
</script>