<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
          $this->display();
    }
    public function do_login(){
    	  //dump($_POST);
    	 $m=D('administrator');
		 $where['user']=I('post.email');
		 $where['password']=I('post.password');
		 $arr=$m->where($where)->find();
		 //dump($arr);exit;
		 if($arr>0){
		 	$t=I('post.admin');
            session('user',md5($t));
			// $url=U('Ceping/index');
		   // $this->success('登录成功','{:U('Admin/News/add')}');
		     $this->redirect("News/add");
		 }else{
		 	$this->error("登录失败，请重新登陆","index");
		 }
    }
    public function layout(){
    	$_SESSION['user']="";
    	$this->redirect('Login/index');
    }
}