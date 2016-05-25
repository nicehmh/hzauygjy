<?php
// 本类由系统自动生成，仅供测试用途
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	//判断是否已登录
	public function _initialize(){
		//dump($_SESSION);
		if($_SESSION['user']==""){
			$this->redirect('Login/index');
		}
	}
    public function lnkh(){
    	$map['class']="口号理念";
		$m=M('photo');
		$str=$m->where($map)->find();
		$con=htmlspecialchars_decode($str['con']);
		$this->assign('list',$con);
		$this->display();
    }
	public function lnkh_record(){
		$map['class']="口号理念";
		$m=M('photo');
		$arr=$m->where($map)->find();
		$map['con']=I('post.con');
		if($arr){
			$where['pid']=$arr['pid'];
			$m->where($where)->save($map);
		}else{
			$m->add($map);
		}
	    $this->redirect('Index/lnkh');
	}
	public function gain(){
    	$map['class']="成果";
		$m=M('photo');
		$str=$m->where($map)->find();
		$con=htmlspecialchars_decode($str['con']);
		$this->assign('list',$con);
		$this->display();
    }
	public function gain_record(){
		$map['class']="成果";
		$m=M('photo');
		$arr=$m->where($map)->find();
		$map['con']=I('post.con');
		if($arr){
			$where['pid']=$arr['pid'];
			$m->where($where)->save($map);
		}else{
			$m->add($map);
		}
	    $this->redirect('Index/gain');
	}
	public function renwu(){
    	$map['class']="任务";
		$m=M('photo');
		$str=$m->where($map)->find();
		$con=htmlspecialchars_decode($str['con']);
		
		$this->assign('list',$con);
		$this->display();
    }
	public function renwu_record(){
	
		$map['class']="任务";
		$m=M('photo');
		$arr=$m->where($map)->find();
		$map['con']=I('post.con');
		if($arr){
			$where['pid']=$arr['pid'];
			$m->where($where)->save($map);
		}else{
			$m->add($map);
		}
	    $this->redirect('Index/renwu');
	}
	public function photo(){
		$map['class']="轮播图片";
		$m=M('photo');
		$str=$m->where($map)->select();
		$this->assign('list',$str);
		$this->display();
	}
	public function upload_photo(){
		//dump($_POST);
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
		// dump($info);exit;
	     if(!$info) {// 上传错误提示错误信息
               $this->error($upload->getError());
         }else{// 上传成功 获取上传文件信息
               $data['con']=$info['photo']['savename'];
         }
		 $data['class']="轮播图片";
		 $map['pid']=I('post.id');
		 $m=M('photo');
		 $m->where($map)->save($data);
		 $this->redirect('Index/photo');
	}
	public function day(){
    	$map['class']="日常活动";
		$m=M('photo');
		$str=$m->where($map)->find();
		$con=htmlspecialchars_decode($str['con']);
		
		$this->assign('list',$con);
		$this->display();
    }
	public function day_record(){
	
		$map['class']="日常活动";
		$m=M('photo');
		$arr=$m->where($map)->find();
		$map['con']=I('post.con');
		if($arr){
			$where['pid']=$arr['pid'];
			$m->where($where)->save($map);
		}else{
			$m->add($map);
		}
	    $this->redirect('Index/day');
	}
	public function activity(){
    	$map['class']="特色活动";
		$m=M('photo');
		$str=$m->where($map)->find();
		$con=htmlspecialchars_decode($str['con']);
		
		$this->assign('list',$con);
		$this->display();
    }
	public function activity_record(){
	
		$map['class']="特色活动";
		$m=M('photo');
		$arr=$m->where($map)->find();
		$map['con']=I('post.con');
		if($arr){
			$where['pid']=$arr['pid'];
			$m->where($where)->save($map);
		}else{
			$m->add($map);
		}
	    $this->redirect('Index/activity');
	}
}