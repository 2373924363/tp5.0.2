<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:93:"E:\tupian\php\php\wamp64\wamp64\www\tp5.0.2\public/../application/index\view\index\login.html";i:1545277614;s:21:"../public/header.html";i:1540649702;}*/ ?>
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

<style type="text/css">
html,body{
  width:100%;
  height:100%;
background-image:url(../../../../public/bootstrap337/images/deng.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%; 
  
}
  .container1{
    margin: 0px auto;
     border:3px solid #fff;
     width:400px;
     height: 300px;
     position:relative;
    top:-300px;
    background:url(../../../../public/bootstrap337/images/deng.png);
    text-align:center;
    border-radius:20px;
    opacity:0.9;
  }
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
    input[type=password]{
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
    td{
  color: #FFF;
  font-weight: 900;
  font-size: 14px;
      }
</style>
<body>

<div class="container1" id="deng">
 <h4 style="margin-left:10px;font-weight: 900;font-family: 华文隶书;color: #00fFFF; ">用户登陆页面</h4>
 <hr/>
    <FORM method="post" class="form" action="<?php echo url('checkCode'); ?>">
<table style="margin: 0px auto;">
    
        <tr style="">
            <td>账    号：</td>
            <td><INPUT type="text" class="text" name="user" placeholder="请输入账号" maxlength="10" required></td>
            <td></td>
        </tr>
        <tr>
            <td>密    码：</td>
            <td><INPUT type="password" class="text" name="password"  placeholder="请输入密码" maxlength="10" required></td>
            <td></td>
        </tr>
        <tr>
            <td>验证码：</td>
            <td><INPUT type="text" style="width: 70px;float: left;"name="code" placeholder="请输入验证码">
            
            <div >
            <img style="margin-left:5px; "src="<?php echo captcha_src(); ?>"
             onClick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
            </div>
            </td>
        </tr>
            <tr>
            
            <th align="center" colspan="3"><INPUT type="submit" class="btn" value=" 登录 "></th>
            
        </tr>
    
</table>


</FORM>
      
  
 

</div>
<script type="text/javascript">
  $(function(){
  deng()
  })
function deng(){
  
    $(".container1").animate({top:'130px'},300).animate({top:'80px'},200).animate({top:'130px'},200).animate({top:'120px'},100).animate({top:'130px'});
    
  }
</script>

</body>
</html>