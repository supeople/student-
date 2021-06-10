<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html";charset="gb2312">
		<title>增添学生成绩数据</title>
		<style type="text/css">
			a{text-decoration: none;font-size: 25px;font-family: 微软雅黑;color: rgb(98,94,91);}
			a:link{color: #0000FF;}/*未访问的颜色 blue*/
			a:hover{color: #FF00FF;}/*鼠标放上去的颜色（没起作用）紫色*/
			a:visited{color: #00FFFF;}/*访问过的颜色 浅蓝*/
			a:active{color: #FF00FF;}/*选定的代码 紫色*/
		</style>
	</head>
	<body>
		<div style="font-size: 25px;font-family: 微软雅黑;color: rgb(0,0,0);" align="center">请填写表单以添加数据</div>
		<table align="center">
			<form action="mysql_opt.php" method="post" style="margin: 35px auto;padding: 30px;box-shadow: 1px 1px 2px 1px #aaaaaa; border-radius:3px;width: 500px;">
				<ul>
					<li>
						学号:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 200px;"placeholder="请输入学号(唯一)" />
					</li>
					<li>
						姓名:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 200px;"placeholder="请输入姓名" />
					</li>
					<li>
						班级:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 200px;"placeholder="请输入班级" />
					</li>
					<li>
						性别:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 200px;"placeholder="请输入性别" />
					</li>
					<li>
						C语言程序设计:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 150px;"placeholder="请输入C语言程序设计成绩(满分100分)" />
					</li>
					<li>
						网络编程PHP:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 150px;"placeholder="请输入网络编程PHP成绩(满分100分)" />
					</li>
					<li>
						Flash动画设计:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 150px;"placeholder="请输入Flash动画设计成绩(满分100分)" />
					</li>
					<li>
						Java程序设计:<input type="text" name="" style="background-color: rgb(250,255,189)!important;border-radius: 3px;box-shadow: none;color: rgb(0,0,0);line-height: 26px;width: 150px;"placeholder="请输入Java程序设计成绩(满分100分)" />
					</li>
				</ul>
				
				<input type="submit" value="提交" style="height: 26px;border: 1px;background-color: #00bee7;color: #fff;width: 72px;border-radius: 3px;"/>
			</form>
		</table>
		<div style="height: 100px;width: 240px;margin: 0px auto;"align="center">
			<p><a href="welcom_mag.php" align="center">返回服务选择页面</a></p>
		</div>
	</body>
</html>
