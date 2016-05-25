<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class PeopleController extends Controller {
	//判断是否已登录
	public function _initialize(){
		//dump($_SESSION);
		if($_SESSION['user']==""){
			$this->redirect('Login/index');
		}
	}
    public function add(){
    	$this->display();
    }
	public function manager(){
		$m=M('people');
		$str=$m->select();
		if($str){
			$this->assign('list',$str);
		}
		$this->display();
	}
	public function record(){
		 $config = array(
                'maxSize'    =>    3145728,
                'rootPath'   =>    './public/upload/',
                'savePath'   =>    '',
                'saveName'   =>    array('uniqid',''),
                'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
                'autoSub'    =>    false,
               'subName'    =>    array('date','Ymd'),
         );
         $upload = new \Think\Upload($config);// 实例化上传类
		 // 取得成功上传的文件信息
         $info = $upload->upload();
	     if(!$info) {// 上传错误提示错误信息
               $this->error($upload->getError());
         }else{// 上传成功 获取上传文件信息
               $data['img']=$info['img']['savename'];
			  
         }
		 $data['name']=I('post.name');
		 $data['job']=I('post.job');
		 $data['tel']=I('post.tel');
		 $m=M('people');
         if($m->add($data)){
			  $this->redirect('people/manager');
		 }
	}
	public function update(){
		$map['eid']=I('get.id');
		 $config = array(
                'maxSize'    =>    3145728,
                'rootPath'   =>    './public/upload/',
                'savePath'   =>    '',
                'saveName'   =>    array('uniqid',''),
                'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
                'autoSub'    =>    false,
               'subName'    =>    array('date','Ymd'),
         );
         $upload = new \Think\Upload($config);// 实例化上传类
		 // 取得成功上传的文件信息
         $info = $upload->upload();
	     if(!$info) {// 上传错误提示错误信息
               $this->error($upload->getError());
         }else{// 上传成功 获取上传文件信息
               $data['img']=$info['img']['savename'];
			  
         }
		 $data['name']=I('post.name');
		 $data['job']=I('post.job');
		 $data['tel']=I('post.tel');
		 $m=M('people');
         $m->where($map)->save($data);
		 $this->redirect('People/manager');
	}
	public function delete_link(){
		$map['eid']=I('get.id');
		$m=M('people');
		$m->where($map)->delete();
		$this->redirect('people/manager');
	}
	public function updatepeople(){
		$map['eid']=I('get.id');
		$m=M('people');
		$str=$m->where($map)->find();
		if($str){
			$this->assign('arr',$str);
		}
		$this->display();
	}
}