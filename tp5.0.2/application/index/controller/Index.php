<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;


class Index extends Controller{
    public function index(){
        
     $list = Db::name("student")
    ->paginate(7);
    $this->assign('list', $list);
    return $this->fetch();
    
    
return view();
}
public function index1(){
     
     $list = Db::name("student")
    ->paginate(15);
    $this->assign('list', $list);
    return $this->fetch();
return view();
}

public function index2(){
return view();
}
public function zeng(){
    return view();
}
 public function zeng1(){
$con['s_name']=input('s_name');
$con['s_sex']=input('s_sex');
$con['s_km']=input('s_km');
$con['s_xh']=input('s_xh');
$con['s_grade']=input('s_grade');
$con['s_photo']=input('s_photo');
$con['s_sheng']=input('s_sheng');
$con['s_di']=input('s_di');
// var_dump($con);
// exit();
    $data=array('s_id'=>null,'s_name'=>$con['s_name'], 's_sex'=>$con['s_sex'], 's_km'=>$con['s_km'], 's_xh'=>$con['s_xh'],'s_grade'=>$con['s_grade'],'s_photo'=>$con['s_photo'],'s_sheng'=>$con['s_sheng'],'s_di'=>$con['s_di']);

Db::name("student")->insert($data);
 $this->redirect("index");

 }
public function caozuo(){
    $xx=Request::instance()->get('id');
 $list = Db::name("student")
 ->where('s_xh',$xx)->select();
$this->assign('list', $list);
    return $this->fetch();
 return view();
}
public function caozuo1(){
     $xx=Request::instance()->get('id');
    $con['s_name']=input('s_name');
$con['s_sex']=input('s_sex');
$con['s_km']=input('s_km');
$con['s_xh']=input('s_xh');
$con['s_grade']=input('s_grade');
// var_dump($con);
// exit();
    $data=array('s_id'=>null,'s_name'=>$con['s_name'], 's_sex'=>$con['s_sex'], 's_km'=>$con['s_km'],'s_grade'=>$con['s_grade']);


$zz=Db::name("student")->where("s_xh",$con['s_xh'])->update($data);

 
   
   $this->redirect("index"); 
}
public function caozuo2(){
    $xx=Request::instance()->get('id');
 $list = Db::name("student")
 ->where('s_xh',$xx)->select();
$this->assign('list', $list);
return $this->fetch();
 return view();
}
public function caozuo3(){
    
    $con['s_name']=input('s_name');
$con['s_sex']=input('s_sex');

$con['s_xh']=input('s_xh');
$con['s_photo']=input('s_photo');
$con['s_sheng']=input('s_sheng');
$con['s_di']=input('s_di');
// var_dump($con);
// exit();
    $data=array('s_id'=>null,'s_name'=>$con['s_name'], 's_sex'=>$con['s_sex'], 's_photo'=>$con['s_photo'],'s_sheng'=>$con['s_sheng'],'s_di'=>$con['s_di']);


$zz=Db::name("student")->where("s_xh",$con['s_xh'])->update($data);

 
   
   $this->redirect("index"); 
}
public function shan(){
$xx=Request::instance()->get('id');
 $list = Db::name("student")
 ->where('s_xh',$xx)->delete();
$this->redirect("index"); 
}


public function order(){
        if(input('?cookie.username')){
            echo 'hello'.cookie('username');
        }
    $list = Db::name("order")
    ->where('date','between',['2017-01-01','2017-12-31'])
    ->paginate(3);
    $this->assign('list', $list);
    return $this->fetch();
    }
public function login(){
      return view();
    }
     public function checkCode($code){
        if(!captcha_check($code)){
            $this->error("验证码不正确");
        }else{
            $con['username']=input('user');
            $result=db('user1')->where($con)->select();
            if($result==null){
                $this->error("账号不存在");
            }else{
                $con['password1']=input('password');
                $result=db('user1')->where($con)->select();
                if($result==null){
                    $this->error("输入的密码不正确！");
                }else{

                cookie('username',input('user'),36000);
                $usertype=$result[0]['username'];
                if($usertype=='guang'){
                    $this->redirect('index');
                }else{
                    $this->redirect("index1");
                }
            }
        }
    }
}}