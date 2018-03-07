<?php 
namespace Home\Controller;
use Think\Controller;
class HomeController extends Controller{
	public function index(){
		$username=$_POST["username"];
    	$password=$_POST["password"];
		$user=M("users");
		// var_dump($username);
		// var_dump($password);
		// die();
		if($username!=''){
			$condition['username']=$username;
			$result=$user->where($condition)->find();
			$pass=$result['passw'];
			// if ($_SESSION('?id')){
			session('id',null);
			session('id',$result['id']);
			// $_SESSION['id']=$result[0]['id'];

			// }
			$pass1=md5($password);
			// var_dump($pass1);
			if ($pass==$pass1) {
				// var_dump($result);
			 	$this->redirect('home');
			}
			else{
				$this -> error("密码或者用户名错误！！");
			}

		}
		}
	public function suipian(){
			$user=M("users");
    		$id=session('id');

    			// var_dump(intval($id));
    			// $condition['id']="'".$id."'";
    			if ($id) {
    				# code...
    			
				$result=$user->where("id=".$id)->select();
    			// $id="wayne";
    			$url=$result[0]["header"];
    			$this->assign("login",$result);
    			}
    			$essay=M('essay');
    			$p=$_GET['p'];
    			if (!$p) {
					$p=1;
					# code...
				}
				$condition['status']="1";
				$condition['is_promit']="1";
				$condition['kind']="1";
				$list=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->where($condition)->order('create_time desc')->page($p.',10')->select();
				$this->assign("list",$list);

				$condition1['status']="1";
				$condition1['is_promit']="1";
				$l=$essay->where($condition1)->order('create_time desc')->limit(8)->select();
				$this->assign("l",$l);
				$count=$essay->where($condition)->count();//查询总记录
				// var_dump($count);
				$page=new\Think\Page($count,10);//实例化page类
				$show=$page->show();
				$this->assign("page",$show);
				// var_dump($show);

				$this->display();




	}
	public function wenzhang(){
			$user=M("users");
    			$id=session('id');

    			// var_dump(intval($id));
    			// $condition['id']="'".$id."'";
    			if ($id) {
    				# code...
    			
				$result=$user->where("id=".$id)->select();
    			// $id="wayne";
    			$url=$result[0]["header"];
    			$this->assign("login",$result);
    			}
    			$essay=M('essay');
    			$p=$_GET['p'];
    			if (!$p) {
					$p=1;
					# code...
				}
				$condition['status']="1";
				$condition['is_promit']="1";
				$condition['kind']="2";
				$list=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->where($condition)->order('create_time desc')->page($p.',10')->select();
				$this->assign("list",$list);

				$condition1['status']="1";
				$condition1['is_promit']="1";
				$l=$essay->where($condition1)->order('create_time desc')->limit(8)->select();
				$this->assign("l",$l);
				$count=$essay->where($condition)->count();//查询总记录
				// var_dump($count);
				$page=new\Think\Page($count,10);//实例化page类
				$show=$page->show();
				$this->assign("page",$show);
				// var_dump($show);

				$this->display();




	}
	 public function home(){
	 
	 		# code...
	 	
    		// $id=get_current_user();
    		if ($_GET['sreach']=='') {
    		# code...
    	
    		
    			$user=M("users");
    			$id=session('id');

    			// var_dump(intval($id));
    			// $condition['id']="'".$id."'";
    			if ($id) {
    				# code...
    			
				$result=$user->where("id=".$id)->select();
    			// $id="wayne";
    			$url=$result[0]["header"];
    			$this->assign("login",$result);
    			}
    			$essay=M('essay');
    			$p=$_GET['p'];
    			if (!$p) {
					$p=1;
					# code...
				}
				$condition['status']="1";
				$condition['is_promit']="1";
				$list=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->where($condition)->order('create_time desc')->page($p.',10')->select();
				$this->assign("list",$list);
				$l=$essay->where($condition)->order('create_time desc')->limit(8)->select();
				$this->assign("l",$l);
				$count=$essay->where($condition)->count();//查询总记录
				// var_dump($count);
				$page=new\Think\Page($count,10);//实例化page类
				$show=$page->show();
				$this->assign("page",$show);

				// var_dump($show);

				$this->display();
			
    		}
    		if ($_GET['sreach']!='') {
    		# code...
    			$sreach=$_GET['sreach'];
    			$a="%".$sreach."%";
    			$id=session('id');
    			if ($id) {
    			// var_dump(intval($id));
    			// $condition['id']="'".$id."'";
    				
    			$user=M('users');
				$result=$user->where("id=".$id)->select();
    			// $id="wayne";
    			$url=$result[0]["header"];
    			$this->assign("login",$result);
    			}
			
				$essay=M('essay');
				
				$condition['status']="1";
				$condition['is_promit']="1";
				$condition1['title']=array('like',$a);
				$condition1['status']="1";
				$condition1['is_promit']="1";
				$l=$essay->where($condition)->order('create_time desc')->limit(8)->select();
				$this->assign("l",$l);
				$list=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->where($condition1)->order('create_time desc')->page($p.',10')->select();
			 // var_dump($list);
				 $this->assign("list",$list);
				
				$count=$essay->where($condition1)->count();//查询总记录
				$page=new\Think\Page($count,10);//实例化page类
				 $show=$page->show();
				 $this->assign("page",$show);
				 // var_dump($show);
				$this->display();


    		}
    		

    	
    
    	}
    
    

   

    public function add(){
    		$comment=M('essay');
    		$l=$comment->where($condition)->order('create_time desc')->limit(8)->select();
				$this->assign("l",$l);
    	if (!empty($_POST)) {
    		# code...
    	
    		$uid=session('id');
    		$kind=$_POST['kind'];
    		$content=$_POST['content'];
    		$create_time=date('y-m-d H:i:s',time());
    		$title=$_POST['title'];
    		$status=$_POST['status'];
    		if ($uid=="") {
    			$this -> error("还未登录！！请先登录");
    			# code...
    		}
    		else{
    			$data['uid']=$uid;
    			$data['kind']=$kind;
    			$data['content']=$content;
    			$data['create_time']=$create_time;
    			$data["title"]=$title;
    			$data["status"]=$status;
    			$data["is_promit"]="0";

    		

    			$res=$comment->data($data)->add();
    			// var_dump($res);
    			if ($res) {
    				$data['flag']=$res;
    				$comment->where("id=$res")->save($data);




    				$this->success("发布成功！");
    				# code...
    			}else{
    				$this->error("评论失败。");

    				}



    		}
    	}else{
    		$this->display();
    	}


    	
    }


    public function edit(){
    	$id=session('id');
    	$user=M('users');
    	$a=$user->where("id=$id")->select();
    	if ($a) {
    		$this->assign("a",$a);
    		
    		# code...
    	}

    	$message=M('message');
    	$b=$message->join('RIGHT JOIN users ON message.uid = users.id' )->where("toid=$id")->select();
    	if ($b) {
    		$this->assign("b",$b);
    		# code...
    	}
    	
    	$fri=M('relationship');
    	$c=$fri->join('RIGHT JOIN users ON relationship.c2 = users.id' )->where("c1=$id")->select();
    	if ($c) {
    		$this->assign("c",$c);
    		# code...
    	}
    	$this->display();



    }
    public function look(){

    	if (!empty($_GET)) {
    		$id=$_GET['id'];
    		// $id=session('id');
    		$user=M('users');
    		$a=$user->where("id=$id")->select();
    		 // var_dump($a[0]['sex']);
    		if ($a) {
    			if ($a[0]['sex']=='1') {
    				$b="男";
    				
    			}if ($a[0]['sex']=='2') {
    				$b="女";
    				
    				# code...
    			}else{
    				$b="保密";
    			}

    				$c=session('id');
    				$this->assign("c",$c);
    				$this->assign("b",$b);

    				$this->assign("a",$a);
    				$this->display();
    			
    		# code...
    		}
    			# code...
    	}





    }


    public function skimnews(){

    	$uid=session('id');
    	$this->assign("uid",$uid);
    	$id=$_GET['notesid'];
   		$essay=M('essay');

		$condition['status']="1";
		$condition['is_promit']="1";
   		$l=$essay->where($condition)->order('create_time desc')->limit(8)->select();
		$this->assign("l",$l);
    	$a=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->where("flag=$id")->select();
		$p=$_GET['p'];
    // 			if (!$p) {
				// 	$p=1;
				// 	# code...
				// }
		
		$condition1['e_id']=$id;
    		$comment=M('comment');
    		// $b=$comment->join('RIGHT JOIN users ON comment.uid = users.id' )->where("e_id=$id")->select();
    		$list=$comment->join('RIGHT JOIN users ON comment.uid = users.id' )->where($condition1)->order('create_time desc')->page($p.',10')->select();
				// var_dump($list);
				$this->assign("list",$list);
				
				// $condition['is_promit']="1";
				$count=$comment->where($condition1)->count();//查询总记录
			 // var_dump($count);
				$page=new\Think\Page($count,10);//实例化page类
				$show=$page->show();
				$this->assign("page",$show);
    	
    	// $this->assign("b",$b);
    	$this->assign("a",$a);
    	$this->display();
    	




    }
    public function comment(){
    	$uid=$_POST['uid'];
    	$e_id=$_POST['e_id'];
    	$content=$_POST['content'];
    	$create_time=date('y-m-d H:i:s',time());
    	if ($uid=="") {
    		$this -> error("还未登录！！请先登录");
    		# code...
    	}
    	else{
    		$data['uid']=$uid;
    		$data['e_id']=$e_id;
    		$data['content']=$content;
    		$data['create_time']=$create_time;
    		$comment=M('comment');
    		$res=$comment->data($data)->add();
    		if ($res) {
    			$this->success("评论成功！");
    			# code...
    		}else{
    			$this->error("评论失败。");

    		}



    	}



    }

    public function change_password()
	{//更改密码
		$id=session('id');
			if(!empty($_GET['text'])){
					$id=session('id');


					$old_password=$_GET['text'];
					// session("thepass",$old_password);
					 // var_dump($id);
					$User=M('users');
					
					$result=$User->where("id=$id")->select();
					$password=$result[0]['passw'];
					$data =md5($old_password);
					// $this->ajaxReturn($password);


					// var_dump($password);
					
					if ($password!=$data) {
				
				
						$flag=0;
						$this->ajaxReturn($flag);

					}else{
						$flag=1;
						$this->ajaxReturn($flag);

				}
			}

			// if (!empty($_POST['submit'])) {
				# code...
			
				$id=session('id');
				$oldpassword=$_POST['oldPassword'];
				$new_password=$_POST['newPassOne'];
				// $data =sp_password($oldpassword);
				$User=M('users');
				$result=$User->where("id=$id")->select();
				$pass=$result[0]['passw'];
				$data =md5($oldpassword);

					
				
				if ($data==$pass) {
					# code...
					
					$new_pass=md5($new_password);
					$a['passw']=$new_pass;
					$qqw=$User->where("id=$id")->save($a);
					
					
					// $this->success('修改成功！');
					$this->redirect('edit');
				}
				else{
					// $this->success('修改成功！')
					$this->redirect('edit');
				}
				 
				
			// }
	}
	public function change_email(){
		$id=session('id');
			
		//更换邮箱
		
				
				$new_email=$_POST['email'];//接收前段传递过来的数据
				// var_dump($new_email);
				$User = M("users"); // 实例化User对象
				// 要修改的数据对象属性赋值
			
			
				$data["email"] = $new_email;
				$User->where("id=$id")->save($data);
				$this->redirect('edit');
			
	}
	 public function change_phone()
	{//更改手机号
		
		if(!empty($_POST)){
			$id=session('id');
			$new_phone=$_POST['phone'];
			$User=M('users');
			$data['phone']=$new_phone;
			$User->where("id=$id")->save($data);
			// $this->success('修改成功！');
			$this->redirect('edit');

		}
	}
	public function login_ajax(){
			$id=session('id');
			$a=$_GET['value'];
			$user=M('users');
			$result=$user->where("username='$a'")->select();
			if($result){
				if($result[0]['id']!=$id){
				$b=0;//重复
				$this->ajaxReturn($b);}
			}else{

				$b=1;//不重复
				$this->ajaxReturn($b);
			}

	}
	public function change(){

		
			
				$id=session('id');
				$user=M('users');
				$user_login=$_POST['user_login'];
				$birthday=$_POST['birthday'];
				$qq=$_POST['nickname'];
				$signature=$_POST['signature'];
				$sex=$_POST['sex'];
				$data['username']=$user_login;
				$data['birthday']=$birthday;
				$data['nickname']=$qq;
				$data['signature']=$signature;
				$data['sex']=$sex;

		
				$user->where("id=$id")->save($data); 
				$this->redirect("edit");

	}

	public function upload(){
	 	//上传头像
	 	// echo "文件传入后台！";
	 	// if (!empty($_POST)) {
	 	// 	$id=get_current_admin_id();
	 	// 	# code...
	 	
	 		if (!empty($_FILES)) {
	 			# code...
	 			$img=$_FILES['file'];
	 			$config=array(
	 				'maxSize'  =>     3145728 ,// 设置附件上传大小
	    			'exts'      =>     array('jpg', 'gif', 'png', 'jpeg'),// 设置附件上传类型
	    			'rootPath'  =>     "./public/", // 设置附件上传根目录 
	    			 'savePath'  =>     "/user_header/" ,// 设置附件上传（子）目录  
	   				'saveName'  =>	 md5($img['name']) , //将头像文件的保存名字设置为对应用户的id      确保调用的唯一性。
		 				'autoSub'       =>  false ,//自动子目录保存文件
		 				);

	 			
	 			$id=session('id');
    			$upload = new \Think\Upload($config);// 实例化上传类
    			
   				 // 上传文件  
   				if(!file_exists($upload ->rootPath)){
				mkdir($upload ->rootPath,0777,ture);
				chmod($upload ->rootPath,0777);
				}
    			$info   =   $upload->uploadOne($img);
    			$info['saveName']=md5($img['name']);
    			
    			if(!$info) {// 上传错误提示错误信息
        			$this->error($upload->getError());
        			// $this->redirect("show");
   				}else{// 上传成功
   					// echo "info被写入";
   					$type=$info->saveName;
   					$res=explode('.', $img['name']);
   					$type=$res[1];
   					$result['file_name'] =  $img['name'];
					
					
   					$url='public/user_header/'. $info['saveName'].'.'.$type;
   					$User=M("users");
   					$data['header']=$url;
   					$User->where("id=$id")->save($data);
        			$this->success('上传成功！');

    				}
				}

			// }
		}
		public function leavemessage(){
			$uid=$_POST['uid'];
			$toid=$_POST['toid'];
			$content=$_POST['message'];
			$create_time=date('y-m-d H:i:s',time());
			$data['uid']=$uid;
			$data['toid']=$toid;
			$data['content']=$content;
			$data['create_time']=$create_time;
			$message=M('message');
			$res=$message->data($data)->add();
			if ($res) {
				$this->success('留言成功');

				# code...
			}else{
				$this->error('留言失败');
			}



		}

		public function about(){
			$this->display();
		}
		public function my(){

				$condition['status']="1";
				$condition['is_promit']="1";
			$essay=M('essay');
			$l=$essay->where($condition)->order('create_time desc')->limit(8)->select();
			$this->assign("l",$l);
			$id=session('id');
			$essay=M('essay');
    			$p=$_GET['p'];
    			if (!$p) {
					$p=1;
					# code...
				}
				$condition['uid']=$id;
				
				$list=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->where($condition)->order('create_time desc')->page($p.',10')->select();
				$this->assign("list",$list);
				
				$count=$essay->where($condition)->count();//查询总记录
				// var_dump($count);
				$page=new\Think\Page($count,10);//实例化page类
				$show=$page->show();
				$this->assign("page",$show);
				// var_dump($show);

				$this->display();


		}

		public function delete(){
			$id=$_POST["id"];
			$ser = M("essay"); // 实例化User对象
		
			
			$ser->where("id=$id")->delete();
			if ($ser) {
				$this->success("删除成功！");
				# code...
			}





		}
		public function addfri(){
			$c2=$_POST['c2'];
			
			
			$c1=session('id');
			$condition['c1']=$c1;
			$condition["c2"]=$c2;
			$rela=M('relationship');
			$q=$rela->where($condition)->select();
			if ($q) {
				# code...
				$this->error("你们已是好友了，请不要重复加好友！");
			}else{


				$data['c1']=$c1;
				$data['c2']=$c2;

				$r=$rela->data($data)->add();
				if ($r){
					$this->success("成功加为好友！");
				# code...
				}

			}
		}
}