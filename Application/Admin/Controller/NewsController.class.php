<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
	//判断是否已登录
	public function _initialize(){
		//dump($_SESSION);
		if($_SESSION['user']==""){
			$this->redirect('Login/index');
		}
	}
    public function index(){
    	$this->display();
    }
	public function add(){
		$this->display();
	}
	public function updatenew(){
		$map['nid']=I('get.id');
		$m=M('news');
		$str=$m->where($map)->find();
		if($str){
			$str['con']=htmlspecialchars_decode($str['con']);
			$this->assign('arr',$str);
		}
		$this->display();
	}
	public function upload(){
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
               $data['photo1']=$info['photo1']['savename'];
			   $data['photo2']=$info['photo2']['savename'];
         }
		 $data['title']=I('post.title');
		 $data['con']=I('post.con');
		 $data['date']=date('Y-m-d');
		 $m=M('news');
         if(!$m->add($data)){
			 
		 }else{
			 $this->redirect('News/view');
		 }
	}
	public function update(){
		$map['nid']=I('get.id');
      if($map['nid']){
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
               $data['photo1']=$info['photo1']['savename'];
			   $data['photo2']=$info['photo2']['savename'];
         }
		 $data['title']=I('post.title');
		 $data['con']=I('post.con');
		 $data['date']=date('Y-m-d');
		 $m=M('news');
		 $m->where($map)->save($data);
		 $this->redirect('News/updatenew','id='.$map['nid']);
      }
	}
	public function view(){
		$m=M('news');
		$str=$m->select();
		if($str){
			$this->assign('list',$str);
		}
		$this->display();
	}
	public function delete_link(){
		$map['nid']=I('get.id');
		$m=M('news');
		$m->where($map)->delete();
		$this->redirect('News/view');
	}
}