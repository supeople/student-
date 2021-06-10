<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html";charset="gb2312"/>
		<title>删除操作后台执行页面</title>
	</head>
	<body>
		<?php
		function get_str($str){
			$val = ($_POST[$str])? $_POST[$str]:null;
			return $val;
			}
			$number = get_str("delete");
			$con = mysql_connect("localhost","root","root");
			if(! $con){
				?>
			<script type = "text/javascript">
			alert("数据库连接失败!");
			window.location.href = "delete.php";
			</script>
			<?php
			}
			$sql= "select * from stu_info where id = $number";
			mysql_select_db("xscj");
			$info = mysql_query($sql,$con);
			$num = mysql_num_rows($info);
			if(! $num){
				?>
				<script type = "text/javascript">
				alert("找不到该同学，请重新输入学号!");
				window.location.href = "delete.php";
				</script>
				<?php
			}
			else{
				//找到了该同学,进行删除操作
				$sql = "delete from stu_info where id =$number";
				$info = mysql_query($sql,$con);
				if(! $info){
					//删除成功
					?>
				<script type = "text/javascript">
				alert("删除成功");
				window.location.href = "delete.php";
				</script>
				<?php
				}
				else{
					//删除失败
					?>
					<script type = "text/javascript">
					alert("删除失败");
					window.location.href = "delete.php";
					</script>
					<?php
				}
			}
			?>
	</body>
</html>
