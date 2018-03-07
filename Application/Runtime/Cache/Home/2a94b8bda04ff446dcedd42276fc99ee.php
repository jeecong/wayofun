<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>客云便签</title>

	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">  
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="/Public/index/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/index/css/index.css">
	<script type="text/javascript" src="/Public/index/js/jquery-1.11.3.min.js"></script>
	<!-- // <script type="text/javascript" src="/Public/index/js/bootstrap.min.js"></script> -->
	<style>
 	 .log{
  		text-align: center;
   		background:#004448;
  	}
  	.from{
    	font-family:微软雅黑;font-size:20px;
		/*height:40px;width:300px;*/
		margin-top:20px;
		margin-left: 20px;
		height: 400px;
		width: 300px;
		/*background-color: red;*/;
		position:absolute;


 	}
  	</style>


	<script >  
		var submit;
		var code; //在全局定义验证码      
	//产生验证码     
	window.onload = function() {  
   		 createCode();  
	}  
  
	function createCode() {  
   	 	code = "";  
    	var codeLength = 4; //验证码的长度     
    	var checkCode = document.getElementById("checkCode");  
    	var random = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',  
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //随机数     
    	for(var i = 0; i < codeLength; i++) { //循环操作     
        var charIndex = Math.floor(Math.random() * 36); //取得随机数的索引     
        code += random[charIndex]; //根据索引取得随机数加到code上     
    	}  
    	checkCode.value = code; //把code值赋给验证码     
	}  
	//校验验证码     
	function validate() {  
    	var inputCode = document.getElementById("input").value.toUpperCase(); //取得输入的验证码并转化为大写           
    	if(inputCode.length <= 0) { //若输入的验证码长度为0     
        	alert("请输入验证码！"); //则弹出请输入验证码     
        	submit=false;
    	} else if(inputCode != code) { //若输入的验证码与产生的验证码不一致时     
       	 alert("验证码输入错误！"); //则弹出验证码输入错误   
        	 submit=false;  
        	createCode(); //刷新验证码  

    	} else { //输入正确时  
    		submit=true;   
        	// alert("登陆成功！"); //弹出^-^     
    	}  
	}  

	function check(){
    if (submit)    {        
            
        return true;    
        }
    else{
        return false;
        }
}

     </script>  
 

</head>
<body class="body" >
	<div class="top" style="background-color:#444444">
	<h1 class=h>&nbsp;&nbsp;&nbsp;写下心情，客云便签	</h1>
	<form action="<?php echo U('Home/home');?>" method="get" class="ff">
	<div class="go">
	<div class="col-lg-6">
    <div class="input-group">
    	 
    	<!-- <form action=""> -->

      <input type="text" class="form-control" placeholder="Search in keyun..." name="sreach" style="margin-top:10px;height:30px;opacity: 0.8;margin-right:250px;">

      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" style="margin-top:10px;height:30px;opacity: 0.8;margin-right:200px;"  >Go!</button>
      </span>
     	 <!-- </form> -->
    </div><!-- /input-group -->
  	</div><!-- /.col-lg-6 -->
  	</div>
  	</form>

	<div class=a>
	<a href="<?php echo U('Home/home');?>" >进入大厅</a>&nbsp;
	<a href="<?php echo U('Index/index');?>"> 登陆</a>&nbsp;
	<a href="<?php echo U('Index/register');?>" >注册</a>&nbsp;
	<a href="<?php echo U('Home/about');?>" >关于客云</a>
	</div>


	</div>
	<div class=outer>
	<div class=index>
		

	</div>
	<div  class="log">
		<div class="png" style="margin-top:15px">
			<img src="/Public/index/img/11.png" alt="">
		</div>
		<div class="from">
		<form action="<?php echo U('Home/index');?>" method="post" onsubmit="javascript:return check()">
			<br>	
			<div class="input-group" style="margin-left:45px">
			<span class="input-group-addon">
  			<span class="glyphicon glyphicon-user" aria-hidden="true" style="margin-top:4px">
  			</span> </span>
  			<input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" required='required' style="width:83%;">
			</div>
			<br>
			<div class="input-group" style="margin-left:45px">
				<span class="input-group-addon">
  				<span class="glyphicon glyphicon-lock" aria-hidden="true"> </span>
  				</span>
				<input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon1" name="password" style="width:83%">
				
			</div>
			<br>
			<div> 
			<div class="input-group" style="margin-left:45px">
				
				<span class="input-group-addon">
  				<span class="glyphicon glyphicon-pencil" aria-hidden="true"> </span>
  			</span>
				<input type="text" class="form-control" placeholder="verify" aria-describedby="basic-addon1" id="input" style="width:83%">
				</div>
				<input type="button" id="checkCode" class="code" onclick="createCode()"  style="width:60px;height:22px;font-size:15px;margin-left:45px;"/>  
				 <a href="#" onclick="createCode()" style="font-size:10px;">看不清楚</a><br> 
			
			</div>
			<br>
			<button  class="btn btn-default dropdown-toggle"  type="submit" onclick="validate()" >登陆</button>
		</form>
		<br>
		<a href="<?php echo U('Index/register');?>" style="font-size:15px;" >还没有账号，快来注册吧...</a>
		</div>


	</div>
	</div>
	<div class=footer>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="#" class=b>享受心情，客运便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em class=fl>COPYRIGHT &copy; 1996 &ndash; 2017 wayne. ALL RIGHTS RESERVED.</em>
		</div>
</body>
</html>