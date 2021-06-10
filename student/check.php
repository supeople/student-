<title>密码验证</title>
<meta http-equiv="content-type" content="text/html";charset="gb2312">
<?php
function get_str($str){
	$val = ($_POST[$str])? $_POST[$str]:null;
	return $val;
}
$user = get_str("username");
$pass = get_str("password");
if($user == null or $pass == null){
?>
	<script type = "text/javascript">
	alert("用户名或密码为空，请重新输入");
	window.location.href = "login.php";
	</script>
<?php
}
$con = mysqli_connect("localhost:3308","root","root")or die("数据库连接失败！");
if(! $con){
?>
	<script type = "text/javascript">
	alert("连接服务器失败");
	window.location.href = "login.php";
	</script>
<?php
}
$sel = mysqli_connect("localhost:3308","root","root")or die("数据库选择失败！");
if(! $sel){
?>
	<script type = "text/javascript">
	alert("选择数据库失败");
	window.location.href = "login.php";
	</script>
<?php
}
$sql = "select * from user_info where username = '$user'";
//echo $sql."<br>";
$info = mysqli_query( $sql,$con);
echo $info;
$num = mysqli_num_rows($info);
?>
<?php
if($row['password']==$pass){
	if($row['is_manager'] == 1){
		//是管理员
?>
	<script type = "text/javascript">alert("管理员登录成功！");
	window.location.href = "welcome_mag.php";
	</script>
<?php
} 
if($row['is_manager'] != 0){
	//普通用户登录
	//直接进入查询界面
?>
	<script type = "text/javascript">
	alert("普通用户登录成功");
	window.location.href = "select_stu.php";
	</script>
<?php
}
}
else{
?>
	<script type = "text/javascript">
	alert("密码错误");
	window.location.href = "login.php";
	</script>
<?php
}
mysql_close($con);
?>