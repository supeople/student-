<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php
		//这个页面主要对插入的数据进行处理
		function get_str($str){
			$val = ($_POST[$str])? $_POST[$str]:null;
			return $val;
		}
		$num = get_str("number");//接受学号
		$name = get_str("stuname");//接收班级
		$sex = get_str("class");//接收性别
		$c = get_str("c");//接收C语言成绩
		$php = get_str("PHP");//接收网络编程PHP成绩
		$flash = get_str("Flash");//接收Flash动画设计成绩
		$java = get_str("Java");//接收Java程序设计成绩
		if($num == 0 or $name == null or $class == null or $sex == null or $c == 0 or $php == 0 or $flash == 0 or $java == 0){
		?>
		

		<script type="text/javascript">
			alert("数据输入有误，请重新输入！");
			window.location.href="insert.php";
		</script>
		<?php
		}$sum=$c+$php+$flash+$java;//计算总分
		$con = mysql_connect("location","root","root");
		if(! $con){
			
		
		?>
		<script type="text/javascript">
			alert("数据库连接失败！");
			window.location.href="insert.php";
		</script>
		<?php
		}$sql = "insert into stuinfo(id,姓名,班级,性别,C语言程序设计,网络编程PHP,Flash动画设计,Java程序设计,总分)
		values($num,'$name','$class','$sex','$c','$php','$flash','$java','$sum')";
		mysql_select_db("xscj");
		$info= mysql_query($sql,$con);
		if($info){
		?>
		<script type="text/javascript">
			alert("写入成功");
			window.location.href="insert.php";
		</script>
		<?php
		}
		else{
		?>
		<script type="text/javascript">
			alert("写入失败");
			window.location.href="insert.php";
		</script>
		<?php
		}
		mysql_close($con);
		?>
	</body>
</html>
