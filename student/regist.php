<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>用户注册页面</title>
	</head>
	<body>
		<form action="" method="post">
			<div align="center">
				<font size="5" color="blue">新用户注册</font>
			</div>
			<table width="370" align="center" border="0">
				<tr>
					<td width="80" align="right">用户名:</td>
					<td><input type="text" name="userid" value="" />*1~20个字符</td>
				</tr>
				<tr>
					<td align="right">密码:</td>
					<td><input type="password" name="pwd1" size="21" id="" value="" /></td>
				</tr>
				<tr>
					<td align="right">确认密码:</td>
					<td><input type="password" name="pwd2" size="21" id="" value="" /></td>
				</tr>
				<tr>
					<td align="right">性别:</td>
					<td>
						<input type="radio" name="sex" id="" value="1" />男
						<input type="radio" name="sex" id="" value="0" />女
					</td>
				</tr>
				<tr>
					<td align="right">年龄:</td>
					<td><input type="text" name="age" id="" value="" /></td>
				</tr>
				<tr>
					<td align="right">email:</td>
					<td><input type="text" name="email" id="" value="" /></td>
				</tr>
				<tr>
					<td align="right">管理员:</td>
					<td>
						<input type="radio" name="manager" id="" value="1" />是
						<input type="radio" name="manager" id="" value="0" />否
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="3" align="left">
						<input type="submit" name="submit" id="" value="提交" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="submit2" id="" value="重置" />&nbsp;&nbsp;&nbsp;
						<input type="reset" name="submit3" id="" value="返回登录"onclick="window.location='login.php'"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
error_reporting(0);
include"conn.php";
if(isset($_POST['Submit'])){
	$userid = $_POST['userid'];
	$pwd1 = $_POST['pwd1'];
	$pwd2 = $_POST['pwd2'];
	$sex = $_POST['sex'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$manager = $_POST['manager'];
	$checkid = preg_match('/^\w{1,20}$/',$userid);
	$checkpwd1 = preg_match('/^\w{6,20}$/',$pwd1);
	$checkemail = preg_match('[a-zA-Z0-9_\-]+@[a-zA-Z0-9\-]+。[a-zA-Z0-9\-\.]+$/',$email);

if(! $checkid){
	echo"<script>alert('用户名设置错误！');</script>";
		if(! $checkpwd1){
			echo"<script>alert('密码设置错误！');</script>";
		}
		
		if(! $sex){
			echo"<script>alert('性别为必选项！');</script>";
		}
		
		if(! $age&&(! is_numeric($age))){
			echo"<script>alert('年龄必须为一个数字！');</script>";
		}
		
		if(! $email&&(! $checkemail)){
			echo"<script>alert('email格式错误！');</script>";
		}
		
		if(! $pwd1 != $pwd2){
			echo"<script>alert('两次输入的密码不一致！');</script>";
		}
		
}

else{
	include"conn.php";
	$s_sql = "select * from user_info where username = '$userid'";
	$s_result = mysqli_query( $s_sql);
	if(mysqli_num_rows($s_result) != 0)
	echo"<script>alert('用户名已存在！');</script>";
	else{
		if($age){
			if($email){
				$in_sql = "insert into user_info values('$userid','$pwd1','$manager',$sex,$age,'$email')";
					}
					else{
						$in_sql = "insert into user_info values('$userid','$pwd1','$manager',$sex,$age,'$email',NULL)";
					}
				}else{
					if($email){
						$in_sql = "insert into user_info values('$userid','$pwd1','$manager',$sex,NULL,'$email')";
					}else{
						$in_sql = "insert into user_info values('$userid','$pwd1','$manager',$sex,NULL,NULL)";
					}
					$in_result = mysqli_query($in_sql,$con);
					if(mysqli_affected_rows($con) == 0){
						echo"<script>alert('注册失败！');</script>";
					}
					else{
						//注册成功后跳转到登录页面
						echo"<script>alert('注册成功！');location.href='login.php;</script>";
						//跳转。。。。。。。。。。。。。。。
					}
				}
			}
		}
}
?>