<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
     $this->display();

        
    }
  	
    public function register(){
    	if($_POST['username']){
    	   $username=$_POST['username'];
    	   $password=$_POST['password'];
    	   $repassword=$_POST["repassword"];
    	   $phone=$_POST["phone"];
    	   $sex=$_POST["sex"];
    	   $signature=$_POST["signature"];
    	   $email=$_POST['email'];
    	   if ($password==$repassword&&$password!='') {
                # code...
                $data['username']=$username;
                $data['passw']=md5($password);
                //  var_dump(md5($password));
                $data['phone']=$phone;
                $data['sex']=$sex;
                $data['signature']=$signature;
                $data['email']=$email;
                $user=M('users');
                $res= $user->data($data)->add();
                if ($res) {
                     # code...
                    echo "<script> alert('注册成功，欢迎来到客云便签') </script>";
                     // $this->success("注册成功，欢迎来到客云便签");
                     $this->redirect("index");
                 }
                 else{
                    
                    $this->error("注册失败！请重试");
                 }

             }
             else{
                 E("两次密码不一致！请重新输入！");
                $this->redirect("register");
            }
    	
        }else{
            $this->display();
        }
    }
    




















}