<?php
global $con;
$host="127.0.0.1:3308";
$user = "root";
$passwd = "root";
$database = "xscj";
$con = new mysqli($host,$user,$passwd,$database);
if ($con->connect_error) {
  die("数据库连接失败: " . $con->connect_error);
}
echo "数据库连接成功";
mysqli_select_db($con,$database)or die("数据库选择失败")
?>