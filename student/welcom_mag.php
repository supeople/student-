<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html";charset="gb2312"/>
		<title>welcom</title>
		<style>
			a{text-decoration: none;font-size: 25px;font-family: 微软雅黑;color: rgb(98,94,91);}
			a:link{color: #0000FF;}/*未访问的颜色 blue*/
			a:hover{color: #FF00FF;}/*鼠标放上去的颜色（没起作用）紫色*/
			a:visited{color: #00FFFF;}/*访问过的颜色 浅蓝*/
			a:active{color: #FF00FF;}/*选定的代码 紫色*/
		</style>
	</head>
	<body>
		<div style="font-size: 25px;font-family: 微软雅黑;color: rgb(0,0,0);" align="center">欢迎管理员登录，您可以进行所有操作。</div>
		<div style="height: 180px;width: 180px;margin: 0px auto;" align="right">
			<p style="text-align: center;">
				<img src="../hzgc.jpg" width="160" height="" align="right">
			</p>
		</div>
		<div style="font-size: 25px;font-family: 微软雅黑;color: rgb(0,0,0);" align="center">请选择您需要的服务</div>
		<div style="height: 180px;width: 180px;margin: 0px auto;" align="center">
			<p ><a href = "insert.php" align="center">输入学生成绩信息</a></p>
			<p ><a href = "select_mag.php" align="center">查询学生信息</a></p>
			<p ><a href = "delete.php" align="center">删除学生信息</a></p>
		</div>
	</body>
</html>
<?php
include"conn.php";
?>