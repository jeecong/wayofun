<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($a[0]["nickname"]); ?>的主页</title>



	<meta charset="UTF-8">
	<title>用户概览</title>
	<!-- jQuery -->
	<link rel="stylesheet" href="/Public/index/css/index.css">
	<script type="text/javascript" src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
	<!-- bootstrap -->
	
	<script type="text/javascript" src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
	<script type="text/javascript" src="./public/js/common.js"></script>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<!-- datapicker -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
	<script>
	  $(function() {
	    $( "#datepicker" ).datepicker();
	  });
	</script>

	<style type="text/css">
	.a{
	margin-left: auto;
	margin-right: 10px;
	display: block;
	float: right;
	margin-top: 25px;
	font-size:15px;
	}
	
	.top{
	margin-top:0px;
	height: 50px;
	width: 100%;
	background-color: #003333;
	/*position: fixed;*/

	}	
	
	/*总背景*/
	*{
		margin: 0px;
		padding:0px;
	}
	body{
		background-color: #ECF0F5;
	}
	/*section开始*/
	.main{
		width: 100%;
		height: 100%;
		/*background-color: #ECF0F5*/
	}
	/*右上信息概览*/
	.showTop{
		/*width: 96%;*/
		height: 600px;
		/*height: 70%;*/
		margin: 18px auto;
		border-radius: 4px;
		/*border:3px white solid;*/
		border-top: 4px #3c8dbc solid;
		background-color: white;
		position: relative;
	}
	/*设置所有输入框上的lable、输入框背景为白色*/
	label{
		background-color: white;
		font-weight: 700;
	}
	.row,.form-group,.col-md-6,.col-md-12{
		background-color: white;
	}
	/*设置所有输入框标准宽度*/
	.row{
		width: 95%;
		margin: 3px auto;
	}

	/*左侧头像*/
	.showImg{
		margin: 18px auto;
	}
	.avatar-container {
	    position: relative;
	    height: 200px;
	    margin-bottom: 20px;
	    /*background-color: red;*/
	}
	.avatar-container img {
	    display: inline-block;
    	border: none;
	    transform: translate(-50%);
	    position: absolute;
	    left: 50%;
	}
	.img-circle {
	    border-radius: 50%;
	}
	.avatar-container .img-mask{
	    /*transition: opacity .4s linear;*/
	    position: absolute;
	    border-radius: 50%;
	    left: 50%;
	    /*transform: translate(-50%);*/
	    width: 200px;
	    height: 200px;
	    background-color: #000;
	    opacity: 0;
	    cursor: pointer;
	    text-align: center;
	}
	.avatar-container #uploadForm button{
		position: absolute;
		right: 5%;
		bottom: 5px;
	}
	
	/*头部标题*/
	/*#noteTitle{
		background-color: white;
		position: absolute;
		left: 10px;
		font-weight: bold;
		font-size: 18px;
	}*/
	/*表单*/
	.showTop form{
		background-color: white;
		width: 98%;
		position: absolute;
		top:20px;
		left: 1%;
  		border-collapse:collapse!important;
	}
	.help-block{
		background-color: white;
		color: #dd4b39;
	}
	/*所有的修改密码修改手机修改邮箱*/
	.a{
		float: right;
		color: #2d59a2;
	}
	.label{

	}
	/*手机已验证标签*/
	.bg-green{
		background-color: #00a65a!important;
	}
	/*性别单选框*/
	.radio{
		background-color: white;
	}
	.sex{
		margin-right: 20px;
	}
	/*提交按钮*/
	.button-wrapper{
		text-align: center;
		/*width: 50%;*/
	}
	/*modal*/
	.editPassword{
		/*background-color: white;*/
	}

	/*.help-block{
		background-color: red;
	}*/
	</style>
</head>
<body>
	<div class="top" style="background-color:#444444">
	<h1 class=h>&nbsp;&nbsp;&nbsp;写下心情，客云便签	</h1>
	<form action="<?php echo U('Home/home');?>" method="get" class="ff">
	<div class="go">
	<div class="col-lg-6">
    <div class="input-group">
    	 
    	<!-- <form action=""> -->

      <input type="text" class="form-control" placeholder="Search in keyun..." name="sreach" style="margin-top:8px;height:30px;opacity: 0.8;">

      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" style="margin-top:8px;height:30px;opacity: 0.8;margin-right:200px;"  >Go!</button>
      </span>
     	 <!-- </form> -->
    </div><!-- /input-group -->
  	</div><!-- /.col-lg-6 -->
  	</div>
  	</form>

	<div class="a" style=" display:block;">
	<a href="<?php echo U('Home/home');?>" >进入大厅</a>&nbsp;
	<a href="<?php echo U('Index/index');?>" > 登陆</a>&nbsp;
	<a href="<?php echo U('Index/register');?>">注册</a>&nbsp;
	<a href="<?php echo U('Home/about');?>">关于客云</a>
	</div>


	</div><!--top-->
	<br></br>
	


	<section class="main">
	<!-- <h3 id="noteTitle">用户概览</h3> -->
	<!-- 左侧头像 -->
	<div class="showImg col-md-4 col-sm-4 col-xs-12">
		<div class="avatar-container">
		<!-- 	./data/Upload/user_header/1.png  -->
	
			<img src="/<?php echo ($a[0]["header"]); ?>" height="200" width="200" class="img-circle" alt="用户头像">
			
				<!-- <label for="exampleInputFile">上传头像</label> -->
			
			
		</div>
	</div>

	<!-- 右侧用户信息 -->
	<div class="showTop col-md-6 col-sm-7 col-xs-12">
		<br>
		<div class="png" style="margin-top:px;text-align: center;">
		

		<img src="/Public/index/img/11.png" alt="">
		</div>

	

		

		

		<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="form-group">
			   <label for="exampleInputEmail1">邮箱</label>
			   
			   <input type="email" class="form-control" id="exampleInputEmail1" name="user_email" value="<?php echo ($a[0]["email"]); ?>" disabled="disabled">
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="form-group">
			   <label>手机</label>
			   <small class="label  bg-green">已验证</small>
			   
			   <input type="text" class="form-control" name="phone" value="<?php echo ($a[0]["phone"]); ?>" disabled="disabled">
			</div>
		</div>
		</div>

		<div class="row">
		
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="form-group">
				<label>性别</label>
				<input type="text" class="form-control" name="sex" placeholder="<?php echo ($b); ?>" disabled="true">
				
				
				
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="form-group">
				<label>生日</label>
			   	<input type="text" class="form-control" disabled="true" name="birthday" value="<?php echo ($a[0]["birthday"]); ?>" >
			</div>
		</div>

		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="form-group">
				<label>昵称</label>
			   	<input type="text" class="form-control" id="qqInput" name="nickname" value="<?php echo ($a[0]["nickname"]); ?>" disabled="true" >
			   	<span class="help-block" id="qqSpan" style="text-align: center;"></span>
			</div>
		</div>
		</div>

		<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">
				<label>个性签名</label>
				<textarea class="form-control" rows="3" name="signature" disabled="true" style="resize: none;"><?php echo ($a[0]["signature"]); ?></textarea>
			</div>
		</div>
		</div>
		<br>
		<div class="row button-wrapper">
			<form action="<?php echo U('Home/addfri');?>" method="post">
			<input type="hidden" name="c2" value="<?php echo ($a[0]["id"]); ?>">
			<button type="submit" class="btn btn-default btn-primary" style="margin-top:463px;position:absolute">加为好友</button>

			</form>
			<a href="" data-toggle="modal" data-target=".editPassword">
			<button type="button" class="btn btn-default btn-primary" style="margin-right:120px">留言</button></a>
		</div>
		

	<!-- 修改密码Modal -->
<div class="modal fade editPassword" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" style="width:400px;height:600px;margin:auto">
	<div class="modal-dialog modal-sm" role="document" style="width:400px;height:400px;">
		<div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    <h4 class="modal-title" id="myModalLabel">留言</h4>
			</div>
			<div class="modal-body" style="width:400px;height:300px;">
				<form method="post" action="<?php echo U('Home/leavemessage');?>" id="passwordForm">
						<input type="hidden" name="uid" value="<?php echo ($c); ?>">
						<input type="hidden" name="toid" value="<?php echo ($a[0]["id"]); ?>">
						<textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="请输入留言！" style="resize: none;"></textarea>
					
					
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">确定</button>
					    <button type="button" data-dismiss="modal" class="btn btn-default">取消</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>




	</div>


<!-- 修改邮箱Modal -->

<!-- end-Modal -->
<!-- 修改手机Modal -->

<!-- end-Modal -->


</section>

		<div class="footer" style="margin-top:50%">
			<div style="margin-left:190px;position:absolute;">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="#" class=b>享受心情，客运便签&nbsp;</a>
			<a target="_blank" href="#" class=b>享受心情，客云便签|&nbsp;</a>
			<a target="_blank" href="#" class=b>享受心情，客云便签|&nbsp;</a>
			<a target="_blank" href="#" class=b>享受心情，客云便签|&nbsp;</a>
			<a target="_blank" href="#" class=b>享受心情，客云便签|&nbsp;</a>
			<a target="_blank" href="#" class=b>享受心情，客云便签|&nbsp;</a>
			<a target="_blank" href="#" class=b>享受心情，客云便签|&nbsp;</a>
			</div>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em class=fl>COPYRIGHT &copy; 1996 &ndash; 2017 wayne. ALL RIGHTS RESERVED.</em>
		</div>
</body>
</html>