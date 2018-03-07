<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <title>客云便签</title>
  <link rel="stylesheet" type="text/css" href=" !-PUBLIC-!/Css/page.css" />
  <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">  
  <link rel="stylesheet" href="">
  <link rel="stylesheet" type="text/css" href="/databasework/Public/index/css/bootstrap.min.css">
  <link rel="stylesheet" href="/databasework/Public/index/css/index.css">
  
     <!--  
  <script type="text/javascript" src="/databasework/Public/index/js/jquery-1.11.3.min.js"></script>-->

    <!-- 分享 -->
    <link rel="stylesheet" href="/databasework/Public/share/jsmodern.min.css">
    <script src="/databasework/Public/share/jquery.min.js"></script>
    <script src="/databasework/Public/share/jsmodern.min.js"></script>
    <script>
      $(document).ready(function(){
        jsModern.share({
        qrcode: "#share-qrcode",
        douban: "#share-douban",
        qzone: "#share-qzone",
        sina: "#share-sina",
        qq: "#share-qq"
        });
      
    </script>

  <script src="/databasework/Public/home/js/jquery-3.2.1.min.js"></script>
   <link href="/databasework/Public/slide/css/slideStyle.css" rel="stylesheet">
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
      window.location.href = 'http://localhost/databasework/index.php/Home/Home/skimnews?notesid='+notesid;
    }

    </script>
    <script>
    function look(id){
            // window.location.href = 'http://localhost/databasework/index.php/Home/Home/home';
      window.location.href = 'http://localhost/databasework/index.php/Home/Home/look?id='+id;
    }
    function tosuipian(){
       window.location.href = 'http://localhost/databasework/index.php/Home/Home/suipian';

    }
    function towenzhang(){
       window.location.href = 'http://localhost/databasework/index.php/Home/Home/wenzhang';

    }
</script>
 
</head>
<body class="body " style="background-color:white">
  <div class="top" style="background-color:#444444">
  <h1 class=h>&nbsp;&nbsp;&nbsp;写下心情，客云便签 </h1>
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
  <div style="width:100%;height:384px;background-color:#eeeeee">
  <div id="text"><!-- 盒子-->
  </div>
  </div><!--轮播-->
   
      <script src="/databasework/Public/slide/js/jquery-slideShow.js"></script>
    <script>
        var image=["/databasework/Public/home/image/tree.jpg","/databasework/Public/home/image/2.jpg","/databasework/Public/home/image/3.jpg","/databasework/Public/home/image/4.jpg"];
          var href=["#","#"];
         $("#text").slide({images:image,//必选
             autoPlay:true,
             href:href,
             height:380,//可指定轮播图高度
             interval:6000});
    </script>
    <div style="height:130px;">
        <div style="width:50%;float:left;">
          <a href="<?php echo U('Home/add');?>" >
            <img src="/databasework/Public/home/image/add.png" alt="" style="margin-top:30px;margin-left:400px;">
          </a>
         </div>
          <div >
            <!-- <?php echo ($url); ?> -->
            <!-- <img src="/databasework/<?php echo ($url); ?>" alt=""> -->
            <a href="<?php echo U('Home/edit');?>">
           <img src="/databasework/<?php echo ($login[0]["header"]); ?>" height="80" width="80" class="img-circle" alt="用户头像" style="margin-right:400px;margin-top:30px;float:right;"></a>
          </div>
          <div>
            
            <h4 style="margin-top:40px;position:absolute;margin-left:960px;"><?php echo ($login[0]["nickname"]); ?></h4>
            <br><br>
            <h5 style="margin-top:55px;position:absolute;margin-left:960px;"><?php echo ($login[0]["signature"]); ?></h5>
          </div>
          <div style="margin-top:21px;float:right;margin-right:1px;">
          <h3 style="margin-top:0px">欢迎登陆：</h3>
          </div>

    </div><!--加号--><!-- #D2B48C -->
    <div  style="width:100%;background-color:#dddddd;overflow: auto;">
      <!--<div style="margin-top:20px;margin-left:80px;width:130px;float:left;">
        <ul class="nav nav-pills nav-stacked" >
          <br></br><br></br>
          <button type="button" class="btn btn-primary" onclick="tosuipian()" style="width:150px">碎片</button>
          <br></br>
          <button type="button" class="btn btn-primary" onclick="towenzhang()"  style="width:150px">文章</button>
        
       
        </ul>-->
       <!--  <ul class="nav nav-tabs">
               <li role="presentation" class="active"><a href="#">全部</a></li>
               <li role="presentation"><a href="<?php echo U('Home/suipian');?>">碎片</a></li>
               <li role="presentation"><a href="<?php echo U('Home/wenzhang');?>">文章</a></li>
        </ul> -->
      <!--</div><!--旁边-->
      <div>
        <div class="content" style="width:60%;background-color:#fff;margin-top:30px;float:left;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-left:10%;margin-bottom:50px">


             <ul class="nav nav-tabs">
               <li role="presentation" class="active"><a href="#">全部</a></li>
               <li role="presentation"><a href="<?php echo U('Home/suipian');?>">碎片</a></li>
               <li role="presentation"><a href="<?php echo U('Home/wenzhang');?>">文章</a></li>
        </ul>
  
     
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
          <!-- <h3 class="active" height="50px"><div class="cell"><?php echo ($vo["id"]); ?></div></td> -->
            <div style="height:80px;width:250px;float:left;margin-left:0px;">
              <a href="#"  onclick="look (<?php echo ($vo['uid']); ?>)"><div >
            <img src="/databasework/<?php echo ($vo['header']); ?>" height="40" width="40" class="img-circle" alt="用户头像" style="float:left;margin-top:15px;margin-left:60px;"  ></div></a>
             <h5 style="margin-top:75px;margin-left:50px;"><?php echo ($vo['nickname']); ?></h5>
             <p style="font-size:5px;margin-left:20px">发表于<?php echo ($vo['create_time']); ?></p>
          </div>
          <div style="margin-left:200px;">
            <br>
            
            
            <h4 class="active" height="50px" ><div class="cell"><a href="#" onclick="skimnews(<?php echo ($vo['flag']); ?>)"><?php echo ($vo["title"]); ?></a></div></h4><br>
            <h5 class="active" height="50px" ><div class="cell" style="margin-right:15px"><?php echo ($vo["content"]); ?></div></h5>
          </div>
          <br>
          <HR style="border:3 double #987cb9;margin:auto" width="95%" color=#987cb9 SIZE=3>
        <br>
       
       
        

      </tr><?php endforeach; endif; ?>
        <div class="page" style="margin-right:350px;margin-top:5px;">
        <div class="Pagination"><?php echo ($page); ?></div>
      </div>
     
      
    </div>
       
    
    </div><!--内容模块加分页-->
    <div class="right1" style="width:18%;height:50px;background-color:red;float:right;margin-top:30px;margin-right:11%"><div id="share-douban">豆瓣分享</div>
                <div id="share-qq">QQ好友分享</div>
                <div id="share-sina">新浪微博分享</div>
                <div id="share-qzone">QQ空间分享</div>
                <div id="share-qrcode">二维码分享</div></div>
    
    
  </div>


      


 
  
   <br>
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