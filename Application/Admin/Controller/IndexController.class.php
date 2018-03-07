<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this->display();
    }
    public function login (){
    	$username=$_POST['username'];
    	$password=$_POST['password'];
    	if ($username=="admin"&&$password=="admin12580") {
    		$this->redirect("essayguanli");
    		# code...
    	}else{
    		$this->error("请用管理员身份登陆！");
    	}



    }
    public function essayguanli(){
    			$p=$_GET['p'];
    		if (!$p) {
					$p=1;
					# code...
				}
				$essay=M("essay");
				
				$list=$essay->join('RIGHT JOIN users ON essay.uid = users.id' )->order('create_time desc')->page($p.',10')->select();

				$this->assign("list",$list);
				$count=$essay->count();//查询总记录
				// var_dump($count);
				$page=new\Think\Page($count,10);//实例化page类
				$show=$page->show();
				$this->assign("page",$show);

				// var_dump($show);

				
    			$this->display();



    }
    public function userguanli(){

    		$p1=$_GET['p'];
			if (!$p1) {
					# code...
					$p1=1;
				}
				$user=M("users");
				$list1=$user->order("id desc")->page($p1.',10')->select();
				$this->assign("list1",$list1);
				$count1=$user->count();
				$page1=new\Think\Page($count1,10);
				$show1=$page1->show();
				$this->assign("page1",$show1);
				$this->display();
    		}
   	public function delete(){
   			$essay=M("essay");
   			$id=$_GET['id'];
   			$e=$essay->where("id=$id")->delete();
   			if ($e) {
   				$this->success("删除成功！");
   				# code...
   			}else{
				$this->error("删除失败！");

   			}



   	}
   	public function deleteusr(){
   			$essay=M("users");
   			$id=$_GET['id'];
   			// var_dump($id);
   			// exit();
   			$e=$essay->where("id=$id")->delete();
   			if ($e) {
   				$this->success("删除成功！");
   				# code...
   			}else{
				$this->error("删除失败！");

   			}



   	}
   		public function passnotes(){
   			$essay=M("essay");
   			$id=$_GET['id'];
   			$data['is_promit']="1";
   			$a=$essay->where("id=$id")->select();
   			
   			$e=$essay->where("id=$id")->save($data);
   			if ($e) {
   				$this->success("审核成功！");
   				# code...
   			}else if($a[0]["is_promit"]==1){
				$this->error("审核失败！该帖已经通过了");

   			}else{
   				$this->error("审核失败，请反馈bug!");
   			}



   	}







}