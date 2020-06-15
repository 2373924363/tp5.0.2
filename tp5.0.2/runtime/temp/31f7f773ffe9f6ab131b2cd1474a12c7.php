<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"E:\tupian\php\php\wamp64\wamp64\www\tp5.0.2\public/../application/index\view\index\caozuo.html";i:1545134278;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head><style type="text/css">
input[type=text]{
      width:200px;
      height:30px;
      opacity:0.5;
      filter: alpha(opacity=50);
      color:#000;
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
    <div class="container1" id="deng">
 <h4 style="margin-left:10px;font-weight: 900;font-family: 华文隶书;color: #00fFFF; ">编辑</h4>
 <hr/>
 
    <FORM method="post" class="form" action="<?php echo url('caozuo1'); ?>">
<table style="margin: 0px auto;color: #fff;">
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
        <tr style="">
            <td>姓名：</td>
            <td><INPUT type="text" class="text" name="s_name" value="<?php echo $user['s_name']; ?>" maxlength="10" required></td>
            <td></td>
        </tr>
        <tr>
            <td>性别：</td>
            <td><INPUT type="text" class="text" name="s_sex"  value="<?php echo $user['s_sex']; ?>" maxlength="10" required></td>
            <td></td>
        </tr>
        <tr>
            <td>科目：</td>
            <td><INPUT type="text" name="s_km" value="<?php echo $user['s_km']; ?>">
            </td>
        </tr>
        <tr>
            <td>学号：</td>
            <td><INPUT type="text" name="s_xh" value="<?php echo $user['s_xh']; ?>"onfocus="this.blur();">
            </td>
        </tr>
        <tr>
            <td>成绩：</td>
            <td><INPUT type="text" name="s_grade" value="<?php echo $user['s_grade']; ?>">
            </td>
        </tr>
            <tr>
            
            <th align="center" colspan="3"><INPUT type="submit" class="btn" value=" 确定 "></th>
            
        </tr>
        <tr>
				<th align="center" colspan="2"><a href="index">取消</a></th>

			</tr>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</table>


</FORM>
     
 

</div>
</body>
</html>