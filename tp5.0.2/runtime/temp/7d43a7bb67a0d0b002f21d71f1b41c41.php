<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"E:\tupian\php\php\wamp64\wamp64\www\tp5.0.2\public/../application/index\view\index\zeng.html";i:1545277059;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Examples</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link href="" rel="stylesheet">

</head>
<style type="text/css">
input[type=text]{
	width:200px;
	height:30px;
	opacity:0.5;
	filter: alpha(opacity=50);
	color:#FFF;
	background:#00ffff;
	border-radius:10px;
	border:0px;
	margin-top:5px;
	margin-bottom:5px;
}
input[type=submit]{
	width: 255px;
	height: 30px;
	color: #FFF;
	border-radius: 5px;
	font-family: "华文隶书";
	font-weight: 900;
	font-size: 18px;
	background-color:#09F;

	margin-top:10px;
}
</style>
<body style="width:100%;height:100%;background: url(../../../../public/bootstrap337/images/1.jpg);background-size: cover;">
	<h4 style="margin-left:10px;font-weight: 900;font-family: 华文隶书;color: #00fFFF; ">新增</h4>
	<FORM method="post" class="form" action="<?php echo url('zeng1'); ?>">
		<table style="margin: 0px auto;color: #fff;">

			<tr>
				<td>姓名：</td>
				<td><INPUT type="text" class="text" name="s_name" placeholder="" maxlength="10" required></td>

			</tr>
			<tr>
				<td>性别：</td>
				<td><INPUT type="text" class="text" name="s_sex"  placeholder="" maxlength="10" required></td>
				<
			</tr>
			<tr>
				<td>科目：</td>
				<td><INPUT type="text" name="s_km" placeholder="" required>
				</td>
			</tr>
			<tr>
				<td>学号：</td>
				<td><INPUT type="text" name="s_xh" placeholder="" required>
				</td>
			</tr>
			<tr>
				<td>成绩：</td>
				<td><INPUT type="text"name="s_grade" placeholder="" required>
				</td>
			</tr>
			<tr>
				<td>联系电话：</td>
				<td><INPUT type="text"name="s_photo" placeholder="" required>
				</td>
			</tr>
			<tr>
				<td>生日：</td>
				<td><INPUT type="text"name="s_sheng" placeholder="" required>
				</td>
			</tr>
			<tr>
				<td>地址：</td>
				<td><INPUT type="text"name="s_di" placeholder="" required>
				</td>
			</tr>
			<tr>

				<th align="center" colspan="2"><INPUT type="submit" class="btn" value=" 确定"></th>
			</tr>
			<tr>
				<th align="center" colspan="2"><a href="index">取消</a></th>

			</tr>

		</table>


	</FORM>
</body>
</html>