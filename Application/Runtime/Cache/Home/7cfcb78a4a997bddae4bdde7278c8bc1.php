<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>客云便签</title>
  <link rel="stylesheet" type="text/css" href=" !-PUBLIC-!/Css/page.css" />
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">  
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="/Public/index/css/bootstrap.min.css">
	<link rel="stylesheet" href="/Public/index/css/index.css">
  
     <!--  
	<script type="text/javascript" src="/Public/index/js/jquery-1.11.3.min.js"></script>-->



	<script src="/Public/home/js/jquery-3.2.1.min.js"></script>
	 <link href="/Public/slide/css/slideStyle.css" rel="stylesheet">
  <!--<style>
   .headerimg{
   width:80px;height:80px;margin-right:400px;margin-top:30px;float:right;border-radius:40px;}
   </style>-->
  <style>
  .Pagination a:hover,.current{background-color: #F0FFF0;border: 1px solid #f54281;color: #48D1CC; }
.Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#48D1CC;margin-top: 10px;_margin-top: 20px; clear:both;}
.Pagination a,.Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #48D1CC;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}

  </style>
  <script>
  function skimnews(notesid){
       // window.location.href = 'http://localhost/databasework/index.php/Home/Home/home';
      window.location.href = 'http://www.wayofun.com/index.php/Home/Home/skimnews?notesid='+notesid;
    }

    </script>
    <script>
    function look(id){
      alert(id);
       // window.location.href = 'http://localhost/databasework/index.php/Home/Home/home';
      window.location.href = 'http://www.wayofun.com/index.php/Home/Home/look?id='+id;
    }
    function tosuipian(){
       window.location.href = 'http://www.wayofun.com/index.php/Home/Home/suipian';

    }
    function towenzhang(){
       window.location.href = 'http://www.wayofun.com/index.php/Home/Home/wenzhang';

    }
</script>
 
</head>
<body class="body " style="background-color:white">
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
  
   <div style="width:18%;height:150px;background-color:;float:right;margin-top:30px;margin-right:11%;position:absolute;margin-left:71%;">
        <img src="/Public/index/img/11.jpg" alt="">
      </div>
      <div class="right1" style="display:inline;width:18%;height:70px;background-color:#EEEEEE;float:right;margin-top:220px;margin-left:45%;position:absolute;border-radius:10px">
          <!-- 分享 -->
           <p>分享网站：</p><div class="share-demo">
           
          <a href="javascript:void(0)" class="share"><img src="/Public/share/images/share-ico.png"/ style="width:40px;height:40px"></a>
          </div>
      </div>
    <div class="right1" style="width:18%;height:380px;background-color:#EEEEEE;float:right;margin-top:450px;margin-left:71%;position:absolute;border-radius:10px">
  
      <h4>最新发布：</h4>
        
           <?php if(is_array($l)): foreach($l as $key=>$vo): ?><HR style="border:1 double #987cb9;margin:auto" width="95%" color=#987cb9 SIZE=1>
         <p class="active" height="50px" ><div class="cell" style="margin-left:15px"><a href="#" onclick="skimnews(<?php echo ($vo['flag']); ?>)" ><?php echo ($vo["title"]); ?></a></div></p><?php endforeach; endif; ?>
    </div>
    
    
  </div>

    
   
    <div  style="width:100%;background-color:white;overflow: auto;">
     
      <div>
        <div class="content" style="width:60%;margin-left:100px;background-color:#FFffcc;margin-top:30px;float:clear;border-radius:20px">



  
     
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
          <!-- <h3 class="active" height="50px"><div class="cell"><?php echo ($vo["id"]); ?></div></td> -->
            <div style="height:80px;width:250px;float:left;margin-left:0px;">
              <a href="#"  onclick="look (<?php echo ($vo['uid']); ?>)"><div >
            <img src="/<?php echo ($vo['header']); ?>" height="40" width="40" class="img-circle" alt="用户头像" style="float:left;margin-top:15px;margin-left:60px;"  ></div></a>
             <h5 style="margin-top:75px;margin-left:50px;"><?php echo ($vo['nickname']); ?></h5>
             <p style="font-size:5px;margin-left:20px">发表于<?php echo ($vo['create_time']); ?></p>

          </div>
          <div style="margin-left:200px;">
            <br>
            
            
            <h4 class="active" height="50px" ><div class="cell"><a href="#" onclick="skimnews(<?php echo ($vo['flag']); ?>)"><?php echo ($vo["title"]); ?></a></div></h4><br>
            <h5 class="active" height="50px"style="margin-right:20px" ><div class="cell"><?php echo ($vo["content"]); ?></div></h5>
          </div>
          <br>
          <div  style="float:right;margin-right:15%">
            <form action="<?php echo U('Home/delete');?>" method="post">
              <input type="hidden" name="id" value="<?php echo ($vo['flag']); ?>">
              <button class="btn btn-default dropdown-toggle" type="submit" style="margin-left:80%">删除</button>
            </form>
          </div>
            <p style="float:right;margin-right:20%;display:inline;width:50px;"> 状态：</p>
            <div style="width:120px;height:50px;display:inline-block;margin-left:60%;">
            <select class="form-control" name="sex" value="<?php echo ($vo['is_promit']); ?>" placeholder="<?php echo ($vo["['is_promit']"]); ?>" disabled="true">
            <?php if($vo['is_promit'] == 0): ?><option value='0' selected="selected">审核中</option>
          <option value='1'>审核通过</option>
         
            <?php elseif($vo['is_promit'] == 1): ?>
          <option value='0'>审核中</option>
          <option value='1' selected="selected">审核通过</option>
          
           <?php else: endif; ?>
          </select>
          </div>
         
        <br>
       
       
        

      </tr>
      <hr style="width:98%"><?php endforeach; endif; ?>
        <div class="page" style="margin-right:500px;margin-top:5px;">
        <div class="Pagination"><?php echo ($page); ?></div>
      </div>
     
      
    </div>
       
    
    </div><!--内容模块加分页-->
    
    
    
  </div>


      


 
	
	 <br>
		<div class="footer" style="margin-top:100%;">
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