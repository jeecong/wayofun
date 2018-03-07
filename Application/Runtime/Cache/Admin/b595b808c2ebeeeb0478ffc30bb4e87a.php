<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>客云便签后台管理</title>
<link rel="stylesheet" type="text/css" href="/Public/admin/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/Public/admin/css/component.css" />
<!--[if IE]>
<script src="js/html5.js"></script>
<![endif]-->
<script>

function test()
{
    document.getElementById("f").submit();    
   
}
</script>
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h2 style="text-align:center">后台登陆</h2>
						<br><br>
						<form action="<?php echo U('Index/login');?>" id="f" method="post">
							<div class="input_outer">
								<span class="u_user"></span>
								<input name="username" class="text"  required="quired" style="color: #FFFFFF !important" type="text" placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input name="password" class="text" required="quired" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
							<div class="mb2"><a class="act-but submit" onclick="test()" style="color: #FFFFFF">登录</a></div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/Public/admin/js/TweenLite.min.js"></script>
		<script src="/Public/admin/js/EasePack.min.js"></script>
		<script src="/Public/admin/js/rAF.js"></script>
		<script src="/Public/admin/js/demo-1.js"></script>
		<div style="text-align:center;">

</div>
	</body>
</html>