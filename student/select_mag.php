<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-Transitional.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html";charset="gb2312"/>
		<title>信息查询界面</title>
		<style type="text/css">
			a{text-decoration: none;font-size: 25px;font-family: 微软雅黑;color: rgb(98,94,91);}
			a:link{color: #0000FF;}/*未访问的颜色 blue*/
			a:hover{color: #FF00FF;}/*鼠标放上去的颜色（没起作用）紫色*/
			a:visited{color: #00FFFF;}/*访问过的颜色 浅蓝*/
			a:active{color: #FF00FF;}/*选定的代码 紫色*/
		</style>
	</head>
	<body>
		<div style="font-size: 25px;font-family: 微软雅黑;color: rgb(0,0,0);" align="center">
			<p>请输入学生的学号进行查询操作</p>
			<p>如果要查询所有学生信息请输入“所有”进行查询</p>
		</div>
		<div style="height: 180px;width: 180px; margin: 0px auto;" align="right">
			<p style="text-align: center;">
				<img src="../hzgc.jpg" width="160" height="" align="right">
			</p>
		</div>
		<form action="select_mag.html" method="post" style="margin:35px auto; padding: 30px; box-shadow: 1px 1px 2px 1px #aaaaaa; border-radius: 3px;width: 380px;">
			<input type="text" name="check" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0) line-height:26px" width="240px" placeholder="请输入要查询学生的学号" id="" value="" />
			<input type="submit" value="查询" style="height: 23px; border: 1px;background-color: #00bee7; color:#fff; width: 72px; border-radius: 3px;"/>
		</form>
		<div style="height: 100px;width: 240px;margin: 0px auto;"align="center">
			<p><a href="welcom_mag.php" align="center">返回服务选择页面</a></p>
		</div>
	</body>
</html>
