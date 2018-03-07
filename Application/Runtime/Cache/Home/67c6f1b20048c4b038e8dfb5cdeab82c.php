<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>发布帖子</title>
	<link rel="stylesheet" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
	<link href="/Public/dist/summernote.css" rel="stylesheet"/>
	<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
	<script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
	<script src="/Public/dist/summernote.js"></script>
	<script src="/Public/dist/lang/summernote-zh-CN.js"></script> 
	<script>
	function skimnews(notesid){
       // window.location.href = 'http://localhost/databasework/index.php/Home/Home/home';
      window.location.href = 'http://www.wayofun.com/index.php/Home/Home/skimnews?notesid='+notesid;
    }</script>
	
	<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="/static/css/bootstrap.min.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="/Public/home/css/style.css"> -->

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
	<!--<style>
  .Pagination a:hover,.current{background-color: #F0FFF0;border: 1px solid #f54281;color: #48D1CC; }
.Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#48D1CC;margin-top: 10px;_margin-top: 20px; clear:both;}
.Pagination a,.Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #48D1CC;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}




  </style>-->
	
	<script>
		$(function(){
		 	$('.summernote').summernote({
		        height: 200,
		        tabsize: 2,
		        lang: 'zh-CN'
		    	});
		})
	</script>
</head>
<body style="background-color:">
	<div style="">
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
	<br>
	<div class="png" style="margin-top:px;">
		

		<img src="/Public/index/img/11.png" alt="">
	</div>
	<div class="e" style="background-color:;">
		<div style="">
			<form action="<?php echo U('Home/add');?>" method="post" style="margin-top:px;">
				<div class="input-group" style="float:left;margin-left:15%">
		  			<div  style="margin-right:0px;height:20px;width:10%">
		  			<label>标题：</label></div><br>
		  			<input type="text" class="form-control" name="title" placeholder="请输入标题" aria-describedby="basic-addon1" style="margin-left:0px" required="required"   >
				</div>
				<div class="input-group" style="float:left;margin-left:15%">
					<label >私密性：</label><br>
					<select class="form-control" name="status"  placeholder="请选择类别" style="width:400px"  required="required"  >
						<option value='1'>公开</option>
						<option value='0'>私密</option>
						
				
						</select>
				</div>
				
				
				<div class="col-md-6 col-sm-6 col-xs-6" style="float:left;margin-left:14%">
					<div  style="margin-left:0px;height:20px;width:20%">
					<label >类别：</label></div><br>
						<div class="form-group"style="">
							
						
						<select class="form-control" name="kind"  placeholder="请选择类别" style="width:400px"  required="required"  >
				
						<option value='1'>碎片</option>
						<option value='2'>文章</option>
				
						</select>
				
						</div>
				</div>
				<div style="width:50%;margin-left:20px;margin-top:50px;margin-left:15%;float:left;">
				
					<label style="">内容：</label><br/></br/>
					<div class="summernote" value="content">
			  			
			  			<textarea name="content" id="" cols="500" rows="10" placeholder="请输入内容"  style="height:170px;width: 100%;resize: none;text-align:;"></textarea> <br/> 
					</div>
	        		
	        		
	        			<button type="submit" class="btn btn-primary">提交</button>
				</div>
			</form>
		</div>
		</div>
		<div style="width:18%;height:150px;background-color:;float:right;margin-top:30px;margin-left:70%;position:absolute">
        <img src="/Public/index/img/11.jpg" alt="">
      </div>
      <div class="right1" style="width:18%;height:70px;background-color:white;float:right;margin-top:200px;margin-left:70%;position:absolute">
          <!-- 分享 -->
           <p>分享网站：</p><div class="share-demo">
           
          <a href="javascript:void(0)" class="share"><img src="/Public/share/images/share-ico.png"/ style="width:40px;height:40px"></a>
          </div>
      </div>
    <div class="right1" style="width:18%;height:380px;background-color:white;margin-top:320px;margin-left:70%;position:absolute">
  
      <h4>最新发布：</h4>
        
           <?php if(is_array($l)): foreach($l as $key=>$vo): ?><HR style="border:1 double #987cb9;margin:auto" width="95%" color=#987cb9 SIZE=1>
         <p class="active" height="50px" ><div class="cell" style="margin-left:15px"><a href="#" onclick="skimnews(<?php echo ($vo['flag']); ?>)" ><?php echo ($vo["title"]); ?></a></div></p><?php endforeach; endif; ?>
    </div>
    
    
  </div>
		</div>
		<br>

		

		<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
		<br></br><br></br><br></br><br></br><br></br><br></br>
		<div class="footer"style="background-color:#ffffff;text-align:center;margin-top:20%">
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