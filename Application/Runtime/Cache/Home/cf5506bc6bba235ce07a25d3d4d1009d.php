<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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

    <!-- 分享 -->
    <link href="/Public/share/css/share.css" rel="stylesheet" type="text/css">
    
    <!--<script src="/Public/share/js/jquery-1.8.3.min.js"></script>-->
    <script type="text/javascript" src="/Public/share/js/share.js"></script>
    <script  type="text/javascript">
    
      $('.share').shareConfig({
       Shade : true, //是否显示遮罩层
       Event:'click', //触发事件
       Content : 'share', //内容DIV ID
        Title : '分享' //显示标题
    });
    </script>


  <!--<script src="/Public/home/js/jquery-3.2.1.min.js"></script>-->
   
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
    <div id="bannerShow" class="banner2013">

  <div class="sideShow">

    <div style="z-index: 1; display: block;">

    <a href=""><img src="/Public/home/image/4.jpg"></a>

    </div>

    <div style="z-index: 0; display: none;">

    <a href="" class="forTcss"><img id="chbg" src="/Public/home/image/1.jpg"></a>

    </div>

    <div style="z-index: 0; display: none;">

    <a href="" class="forTcss" >

    <img id="chbg" src="/Public/home/image/8.jpg">

    </a>

    </div>

    <div style="z-index: 0; display: none;">

    <a href="" class="forTcss" >

    <img src="/Public/home/image/7.jpg"></a>

    </div>

    

    <div style="z-index: 0; display: none;">

    <a href="" class="forTcss" >

    <img src="/Public/home/image/9.jpg"></a>

    </div>

    

  </div>

  <div class="circle">

    <ul>

      <li class="on">&nbsp;</li>

      <li class="">&nbsp;</li>

      <li class="">&nbsp;</li>

      <li class="">&nbsp;</li>

      <li class="">&nbsp;</li>

    </ul>

  </div>

</div>



<script type="text/javascript" src="/Public/slide/js/jquery.min.js"></script> 

<script type="text/javascript" src="/Public/slide/js/jquery.im.ui.min.js"></script> 

<script type="text/javascript" src="/Public/slide/js/jquery.im.index.js"></script>

  </div>
  </div><!--轮播-->
   <style type="text/css">


html, body {

  color:#333

}

body {

  background:#fff;

}

ul, ol, li {

  list-style:none;

}

a:link, a:visited {

  color:#333;

  text-decoration:none;

}

a:hover {

  color:#666;

}

img {

  border:none;

}

em {

  font-style:normal;

}



.clearfloat:after {

  content:'.';

  display:block;

  overflow:hidden;

  visibility:hidden;

  font-size:0;

  line-height:0;

  width:0;

  height:0;

}

.clearfloat {

  zoom:1;

}

/* banner */

.banner2013 {

  max-width:1600px;

  min-width:1007px;

  max-height:200px;

  margin:0 auto;



  

}

.sideShow {

  width:100%;

  height:200px;

  background:#fff;

  z-index:1;

  position:relative;

  margin:0 auto;

  background:transparent url(http://im-img.qq.com/home/img/q2013/loading.gif) no-repeat center center;

}

.sideShow div {

  position:absolute;

  width:100%;

  display:none;

}

.sideShow img {

  width:100%;

  min-width:1200px;

  min-height:200px;

}

.circle {

  width:100%;

  height:40px;

  padding-top:8px;

  clear:both;

  position:absolute;

  margin-top:-30px;

  z-index:99999;

  }

.circle ul {

  width:100%;

  text-align:center;



  

  z-index:9999;

}

.circle li {

  display:inline;

  padding:5px 3px;

  margin:0 2px;

  background:transparent url(/Public/slide/images/normal.png) no-repeat center center;

  cursor:pointer;

}

.circle li.on {

  background:transparent url(/Public/slide/images/active.png) no-repeat center center

}

</style>

    <div style="height:130px;">
        <div style="width:50%;float:left;">
          <a href="<?php echo U('Home/add');?>" >
            <img src="/Public/home/image/add.png" alt="" style="margin-top:30px;margin-left:400px;">
          </a>
         </div>
          <div >
            <!-- <?php echo ($url); ?> -->
            <!-- <img src="/<?php echo ($url); ?>" alt=""> -->
            <a href="<?php echo U('Home/edit');?>">
           <img src="/<?php echo ($login[0]["header"]); ?>" height="80" width="80" class="img-circle" alt="用户头像" style="margin-right:400px;margin-top:30px;float:right;"></a>
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
      
      <div>
        <div class="content" style="width:60%;background-color:#fff;margin-top:30px;float:left;border-bottom-left-radius:20px;border-bottom-right-radius:20px;margin-left:10%;margin-bottom:50px">


             <ul class="nav nav-tabs">
               <li role="presentation" ><a href="<?php echo U('Home/home');?>">全部</a></li>
               <li role="presentation"><a href="<?php echo U('Home/suipian');?>">碎片</a></li>
               <li role="presentation" class="active"><a href="<?php echo U('Home/wenzhang');?>">文章</a></li>
        </ul>
  
     
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
      <div style="width:18%;height:150px;background-color:;float:right;margin-top:30px;margin-right:11%">
        <img src="/Public/index/img/11.jpg" alt="">
      </div>
      <div class="right1" style="width:18%;height:70px;background-color:white;float:right;margin-top:30px;margin-right:11%;border-radius:10px">
          <!-- 分享 -->
           <p>分享网站：</p><div class="share-demo">
           
          <a href="javascript:void(0)" class="share"><img src="/Public/share/images/share-ico.png"/ style="width:40px;height:40px"></a>
          </div>
      </div>
    <div class="right1" style="width:18%;height:380px;background-color:white;float:right;margin-top:30px;margin-right:11%;border-radius:10px">
  
      <h4>最新发布：</h4>
        
           <?php if(is_array($l)): foreach($l as $key=>$vo): ?><HR style="border:1 double #987cb9;margin:auto" width="95%" color=#987cb9 SIZE=1>
         <p class="active" height="50px" ><div class="cell" style="margin-left:15px"><a href="#" onclick="skimnews(<?php echo ($vo['flag']); ?>)" ><?php echo ($vo["title"]); ?></a></div></p><?php endforeach; endif; ?>
    </div>
    
    
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