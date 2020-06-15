<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"E:\tupian\php\php\wamp64\wamp64\www\tp5.0.2\public/../application/index\view\index\index1.html";i:1545134271;s:21:"../public/header.html";i:1540649702;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>supermall实战案例</title>
<link href="/supermall/public/bootstrap337/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="/supermall/public/bootstrap337/js/jquery.min.js"></script>
    <script src="/supermall/public/bootstrap337/js/bootstrap.min.js"></script>
</head>     <!--从入口文件index.php开始算路径？-->

<script type="text/javascript" src="../../../../public/bootstrap337/js/jquery-1.10.1.js"></script>


<script src="../../../../public/bootstrap337/js/jq.snow.js"></script>
<!--下面是调用方法和参数说明-->
<script>
$(function(){
	$.fn.snow({ 
		minSize: 5,		//雪花的最小尺寸
		maxSize: 30, 	//雪花的最大尺寸
		newOn: 100,
			//雪花出现的频率 这个数值越小雪花越多
	});
});
</script>
<style type="text/css">
	*{margin:0px;padding:0px;}
	.bei1{
		position: relative;
		margin: 0px auto;
		width:1080px;height:1150px;background:url(../../../../public/bootstrap337/images/3.jpg);background-size: cover; color:#ccc;
         
	}
	#zu1{
		width:1080px;
		height:250px;
		position:absolute;
		
	    left:0px;
		background-image:url(../../../../public/bootstrap337/images/zu2.png);

	
		}
		.zhong{
			margin: 0px auto;
			width:1080px;height:800px;background-color: rgba(250,255,255,0.2);
		}
		.nei1{
			height: 700px;
			width: 300px;
			border: 3px solid #000;
			float: left;
			margin-left: 20px;
			margin-top:10px;  

		}
		.nei{
			height: 700px;
			width: 1000px;
			border: 3px solid #fff;
			float: right;
			margin-right:30px;
			margin-top:50px;  

		}
		.nei2{
			height: 330px;
			width: 1000px;
			border: 3px solid red;
			float: right;
			margin-right:20px;
			margin-top:10px;  

		}
	
	.footer{
		width: 1080px;
		height: 100px;
		background: #fff;
		color: #000;
		
		text-align: center;
		padding-top:40px ;
		
		
	}
	#xue{
		margin: 0px auto;
	}
	.xian{
		height: 320px;
	}
</style>
</head>
<body style="width:100%;
	height:100%;
	background:url(../../../../public/bootstrap337/images/1.jpg) no-repeat;
	background-size:cover;">
	<div class="bei1">
   <div id="xue" style=" width:1080px;height:1150px;
margin: 0px auto;">
<div  style=" margin:0px auto;height:250px;background: url(../../../../public/bootstrap337/images/4.jpg);background-size: cover;">
	<span id="zu1"></span>
    
	<div style="position: relative;top:200px;
	width: 250px;height: 50px; font-weight: 900;font-size: 18px;"><?php if(input('?cookie.username')){
            echo '你好：&nbsp;&nbsp;'.cookie('username').'<br/>';
            echo '欢迎您的到来!'.'&nbsp;&nbsp;&nbsp;&nbsp;<a href="login">退出</a>';
        }?></div>
</div>
<div class="zhong" style="">
	<div class="nei" style="">
		<div class="xian">
			
		<table class="table table-hover">
    <caption style="text-align:center;color: #fff">成绩表</caption>
    <thead>
        <tr>
          
            <th>姓名</th>
            <th>性别</th>
            <th>科目</th>
            <th>学号</th>
            <th>成绩</th>
            
        </tr>
    </thead>
    <tbody>
    <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>
           <tr >
            
            <td><?php echo $user['s_name']; ?></td>
            <td><?php echo $user['s_sex']; ?></td>
            
            <td><?php echo $user['s_km']; ?></td>
            <td><?php echo $user['s_xh']; ?></td>
            <td><?php echo $user['s_grade']; ?></td>
            
           
        </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>


    </tbody>

</table>
</div>
<div align="center">
<?php echo $list->render(); ?>
</div></FORM>
	</div>
	

</div>
<div class="footer"> 广东机电职业技术学院</div>
</div>
</div>
</body>
</html>
