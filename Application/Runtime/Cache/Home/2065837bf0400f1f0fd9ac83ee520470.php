<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关于客云</title>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">  
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="/Public/index/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/index/css/index.css">
  
     <!--  
	<script type="text/javascript" src="/Public/index/js/jquery-1.11.3.min.js"></script>-->



	<script src="/Public/home/js/jquery-3.2.1.min.js"></script>
	 <link href="/Public/slide/css/slideStyle.css" rel="stylesheet">
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

	<div class=a>
	<a href="<?php echo U('Home/home');?>" >进入大厅</a>&nbsp;
	<a href="<?php echo U('Index/index');?>"> 登陆</a>&nbsp;
	<a href="<?php echo U('Index/register');?>" >注册</a>&nbsp;
	<a href="<?php echo U('Home/about');?>" >关于客云</a>
	</div>


	</div><!--top-->
	<br></br>
	<div class="jumbotron">  
    <div class="container">  
        <h1>客云便签</h1>  
        <br>
        <p>客云便签，享受心情。作为一次课程设计，时间稍显仓促，部分功能本可以更好的实现，所以只能用对作者而言更为熟悉的技术方法去实现，而本次设计，在数据库上面，均是GRUD操作，以及多表联合查询，比较好地运用学习了数据库。后期任然会对此网站进行功能优化，体验优化。
        	——作者于2017年9月23晚</p>  
        <p class="text-right"><a class="btn btn-primary btn-lg" href="http://weibo.com/u/5782335323?refer_flag=1001030102_" role="button">关注作者</a></p>  
    </div>  
	</div>  
		<br></br>	
	<div class="footer" style="margin-top:20px;">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="#" class=b>享受心情，客运便签</a>|
      <a target="_blank" href="#" class=b>享受心情，客云便签|</a>
      <a target="_blank" href="#" class=b>享受心情，客云便签|</a>
      <a target="_blank" href="#" class=b>享受心情，客云便签|</a>
      <a target="_blank" href="#" class=b>享受心情，客云便签|</a>
      <a target="_blank" href="#" class=b>享受心情，客云便签|</a>
      <a target="_blank" href="#" class=b>享受心情，客云便签|</a>
      <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em class=fl>COPYRIGHT &copy; 1996 &ndash; 2017 wayne. ALL RIGHTS RESERVED.</em>
    </div>
	
</body>
</html>