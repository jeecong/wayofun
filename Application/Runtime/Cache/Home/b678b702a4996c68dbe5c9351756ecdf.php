<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<title>帖子详情</title>
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="/databasework/Public/home/css/style.css"> -->

	<style type="text/css">
		.top{
	margin-top:0px;
	height: 50px;
	width: 100%;
	background-color: #003333;
	/*position: fixed;*/

	}	
	*{
	 padding:0;
	  margin:0

	} 
	.input-group{

	margin-left: 50px;
	}

	.a{
	margin-left: auto;
	margin-right: 10px;
	display: block;
	float: right;
	margin-top: 25px;
	font-size:15px;


}

.h{
	margin-top: 4px;
	float: left;
	color: #F0FFF0;
}

.body{
	background-color: #666666;
}
		.png {
			text-align: center;
		}
		.edit {
			width: 100%;
			height: 500px;
			margin: 0 auto; 
			margin-top:px;
			position: absolute;
		}
		.input-group {
			margin: 2% auto;
			width: 40%;
		}
		#type {
			margin: 2% auto;
			width: 40%;
		}
		#content {
			margin: 2% auto;
			width: 40%;
		}
	</style>
	<style>
  .Pagination a:hover,.current{background-color: #F0FFF0;border: 1px solid #f54281;color: #48D1CC; }
.Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#48D1CC;margin-top: 10px;_margin-top: 20px; clear:both;}
.Pagination a,.Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #48D1CC;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}

  </style>
	<script type="text/javascript" src="/databasework/Public/home/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/databasework/Public/home/js/bootstrap.min.js"></script>
	<script>function look(id){
   
       // window.location.href = 'http://localhost/databasework/index.php/Home/Home/home';
      window.location.href = 'http://localhost/databasework/index.php/Home/Home/look?id='+id;
    }</script>
</head>
<body style="background-color:#FFFFCC">
	<div style="background-color:white">
	<div class="top">
	<h1 class=h>&nbsp;&nbsp;&nbsp;写下心情，客云便签	</h1>
	<div class="ff" >
	<form action="<?php echo U('Home/home');?>" method="get" >
	<div class="go">
	<div class="col-lg-6">
    <div class="input-group">
    	 


      <input type="text" class="form-control" placeholder="Search in keyun..." name="sreach" style="margin-top:px;height:30px;opacity: 0.8;margin-right:250px;">

      <span class="input-group-btn">
        <button class="btn btn-default" type="submit" style="margin-top:px;height:30px;opacity: 0.8;margin-right:200px;"  >Go!</button>
      </span>
     	 <!-- </form> -->
    </div><!-- /input-group -->
  	</div><!-- /.col-lg-6 -->
  	</div>
  	</form>
  	</div>

	<div class=a>
	<a href="<?php echo U('Home/home');?>" >进入大厅</a>&nbsp;
	<a href="<?php echo U('Index/index');?>"> 登陆</a>&nbsp;
	<a href="<?php echo U('Index/register');?>" >注册</a>&nbsp;
	<a href="<?php echo U('Home/about');?>" >关于客云</a>
	</div>

	

	</div>
	<div style="width:18%;height:150px;background-color:#EEEEEE;float:right;margin-top:100px;margin-left:70%;position:absolute">
        <img src="/databasework/Public/index/img/11.jpg" alt="">
      </div>
      <div class="right1" style="width:18%;height:70px;background-color:#eeeeee;float:right;margin-top:270px;margin-left:70%;position:absolute;border-radius:8px">
          <!-- 分享 -->
           <p>&nbsp;&nbsp;&nbsp;分享网站：</p><div class="share-demo">
           
          <a href="javascript:void(0)" class="share"><img src="/databasework/Public/share/images/share-ico.png"/ style="width:40px;height:40px"></a>
          </div>
      </div>
    <div class="right1" style="width:18%;height:380px;background-color:;margin-top:390px;margin-left:70%;position:absolute;border-radius:8px">
  
      <h4>最新发布：</h4>
        
           <?php if(is_array($l)): foreach($l as $key=>$vo): ?><HR style="border:5 double #987cb9;margin:auto" width="95%" color=#987cb9 SIZE=1>
         <p class="active" height="50px" ><div class="cell" style="margin-left:15px"><a href="#" onclick="skimnews(<?php echo ($vo['flag']); ?>)" ><?php echo ($vo["title"]); ?></a></div></p><?php endforeach; endif; ?>
    </div>
    
	<br>
	<div class="png" style="margin-top:px;">
		

		<img src="/databasework/Public/index/img/11.png" alt="">
	</div>
	<div class="e" style="background-color:white">
			<div style="background-color:#eeeeee;width:50%;height:60px;flaot:left;border-radius:15px;margin-left:15%;margin-top:50px">
				<div class="i" style="text-align:center;">
		  			
		  			<h3 ><?php echo ($a[0]["title"]); ?></h3>
				</div>
				<div class="in" style="text-align:center">
		  			
		  			发布人：<h6 style="display:inline"><?php echo ($a[0]["nickname"]); ?></h6>
				</div>
				</div>
				<br>
				<hr style="width:58%;float:left;margin-left:10%">
				<div class="inpu" style="background-color:;width:50%;height:px;flaot:left;border:;border-radius:;margin-left:15%;margin-top:50px">
		  			
		  			<h5><?php echo ($a[0]["content"]); ?></h5>
				</div>
				<div class="inp" style="float:clear;width:40%;margin-left:50%">
		  			
		  			发布日期：<h6  style="display:inline"><?php echo ($a[0]["create_time"]); ?></h6>
		  			
				</div>
				<br><br>

        		
        		
        		<!-- <button type="submit" class="btn btn-primary">提交</button>
 -->
			
		</div>

		</div>
<br>
		<div style="width:60%;margin-top:%;margin-left:10%;background-color:;border-radius:20px;">
			<div>
			<h3 style="margin-left:100px;">评论：</h3></div>
			
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div  style="height:">
					
						<div style="margin-top:auto;margin-left:5%;">
							<div style="float:left;width:23%">
						<a href="#"  onclick="look (<?php echo ($vo['uid']); ?>)"><div ><img src="/databasework/<?php echo ($vo['header']); ?>" height="40" width="40" class="img-circle" alt="用户头像" style="margin-top:auto;margin-left:180px;background-color:;margin-top:px;"></div></a>
							</div>
						<br>
						<div style="margin-top:4%;float:left"><?php echo ($vo['nickname']); ?></div>
						
						<div style="width:60%;margin-left:30%;float:clear">
						<h5 style="margin-left:50px;margin-right:5%"><?php echo ($vo['content']); ?></h5>
						<h6 style="flaot:right;margin-left:60%"><?php echo ($vo['create_time']); ?></h6>
							</div>
						</div>
					

				</div>
				<HR style="border:3 double #987cb9;margin:auto" width="70%" color=#987cb9 SIZE=3><?php endforeach; endif; ?>
				<div class="page" style="margin-right:500px;margin-top:5px;">
        				<div class="Pagination"><?php echo ($page); ?></div>
      				</div>


					<br></br><br></br>
					<div style="width:90%;height:150px;margin-left:20px;border:solid #FF9966 1px;border-radius:20px">
					<form action="<?php echo U('Home/comment');?>" method="post">
						<!-- <span class="input-group-addon" required="required" id="basic-addon1" style="backgroud-color:white"> -->
						<textarea     id="" cols="30" rows="10" name="content"  style="width:90%;height:50px;resize: none;margin-left:30px;margin-top:30px">
						</textarea><!-- </span> -->
				
						<input type="hidden" name="uid" value="<?php echo ($uid); ?>">	
						<input type="hidden" name="e_id" value="<?php echo ($a[0]["flag"]); ?>">	


					<br><br>
						<button  class="btn btn-default dropdown-toggle"  type="submit" onclick="validate()" style="text-align: center;margin-left:80%;">发布</button>



					
				



					</form>
			




				</div>
		</div>
		

		<br></br><br></br><br></br><br></br><br></br>
		<div class=footer style="text-align:center">
			<a target="_blank" href="#" class=b>享受心情，客运便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>|
			<a target="_blank" href="#" class=b>享受心情，客云便签</a>
			<br>
			<em class=fl>COPYRIGHT &copy; 1996 &ndash; 2017 wayne. ALL RIGHTS RESERVED.</em>
		</div>



	
</body>
</html>