<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html";charset="gb2312"/>
		<title>查询结果</title>
		<style type="text/css">
			a{text-decoration: none;font-size: 25px;font-family: 微软雅黑;color: rgb(98,94,91);}
			a:link{color: #0000FF;}/*未访问的颜色 blue*/
			a:hover{color: #FF00FF;}/*鼠标放上去的颜色（没起作用）紫色*/
			a:visited{color: #00FFFF;}/*访问过的颜色 浅蓝*/
			a:active{color: #FF00FF;}/*选定的代码 紫色*/
		</style>
	</head>
	<body>
		<div style="font-size: 25px;font-family: 微软雅黑;color: rgb(0,0,0);" align="center">查询结果如下</div>
		<div style="height: 180px;width: 180px; margin: 0px auto;" align="right">
			<p style="text-align: center;">
				<img src="../hzgc.jpg" width="160" height="" align="right">
			</p>
		</div>
		<div style="border: 1px;border-color: #00bee7; "align="center">
			<center>
			<table style="border; solid 1px; border-color: #09F;" align="center" width="60%">
				<tr>
					<td width="90px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >学号</td>
					<td width="90px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >姓名</td>
					<td width="90px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >班级</td>
					<td width="90px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >性别</td>
					<td width="60px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >语文</td>
					<td width="60px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >英语</td>
					<td width="60px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >数学</td>
					<td width="60px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >理综</td>
					<td width="60px" style="font-size: 20px; font-family: 微软雅黑; color: rgb(98,94,91);" >总分</td>
				</tr>
		</div>
<?php
	function get_str($str){
		$val = ($_POST[$str])? $_POST[$str]:null;
		return $val;
	}
	if($sel == null){
?>
	<script type = "text/javascript">
	alert("输入不能为空，请重新输入!");
	window.location.href = "select_mag.php";
	</script>
<?php
}
	$con = mysql_connect("localhost","root","root");
	if(!$con){
?>
	<script type = "text/javascript">
	alert("数据库连接失败!");
	window.location.href = "select_mag.php";
	</script>
<?php
}
	mysql_select_db("xscj");
	if($sel != "所有"){
		$sql = "select * from stu_info where id = $sel";
		$info = mysql_query($sql,$con);
		$num = mysql_num_rows($info);
		if($num){
			$row = mysql_fetch_row($info);
			echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8];
		}
		else{
?>
	<script type = "text/javascript">
	alert("查询失败!");
	window.location.href = "select_mag.php";
	</script>
<?php
}
if($row){
	echo"
	<tr>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[0].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[1].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[2].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[3].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[4].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[5].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[6].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[7].'</td>
	<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[8].'</td>
	</tr>";
	}
}
else{
	$sql = "select * from stu_info";
	$info = mysql_query($sql,$con);
	$num = mysql_num_rows($info);
	if($num){ //查询
		while( $row = mysql_fetch_row($info)){//显示所有信息
		echo"<tr>
		<td width=120px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[0].'</td>
		<td width=120px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[1].'</td>
		<td width=120px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[2].'</td>
		<td width=120px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[3].'</td>
		<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[4].'</td>
		<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[5].'</td>
		<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[6].'</td>
		<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[7].'</td>
		<td width=90px style='font-size:20px;font-family:微软雅黑;color:rgb(98,94,91);'>'.$row[8].'</td>
		</tr>";
			
		}
		
	}

else{
?>
	<script type = "text/javascript">
	alert("查询失败!");
	window.location.href = "select_mag.php";
	</script>
<?php
	}
}
?>
			</table>
			</center>
			<div style="height: 100px;width: 240px; margin: 0px auto;" align="center">
			<p><a href="select_mag.php";align="center">返回查询页面</a></p>
			</div>
	</body>
</html>
