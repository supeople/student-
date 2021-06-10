<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html";charset="gb2312">
		<title>登录页面</title>
	</head>
	<body>
		<div>
		<table background="bangwan傍晚.jpg" width="600" height="150" align="center">
			<tr><td align="center" >学生成绩查询系统</td></tr>
			<tr><td align="center">
			<form action="check.php" method="post">
				用户名: <input type="text" name="username"/>	<br><br>
				密&nbsp;&nbsp;码:<input type="password" name="password"/><br><br>
				<input type="submit" name="submit" id="" value="登录" />
				<input type="reset" name="submit" id="" value="注册" onclick="window.location='regist.php'"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<input type="reset" name="sumbit" value="取消" />
			</form></td></tr>
		</table>
	</body>
</html>
<?php
include"conn.php"
?>