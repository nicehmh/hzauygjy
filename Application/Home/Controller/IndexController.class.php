<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$m=M("photo");
		// $map['calss']="轮播图片";
		// $arr=$m->where($map)->getField('con',3);;
		// $this->assign('arr',$arr);
		$map_a['class']="口号理念";
	    $arr_a=$m->where($map_a)->find();
	    $str['khln']=htmlspecialchars_decode($arr_a['con']);
	    $map_b['class']="成果";
	    $arr_b=$m->where($map_b)->find();
		$str['cg']=htmlspecialchars_decode($arr_b['con']);
		$map_c['class']="任务";
	    $arr_c=$m->where($map_c)->find();
		$str['rw']=htmlspecialchars_decode($arr_c['con']);
		//dump($str);//dump($arr_b);
		 $this->assign('arr',$str);
        $this->display();
    }
     public function market(){
		$m=M("photo");
		$map_a['class']="日常活动";
	    $arr_a=$m->where($map_a)->find();
	    $str['day']=htmlspecialchars_decode($arr_a['con']);
	    $map_b['class']="特色活动";
	    $arr_b=$m->where($map_b)->find();
		$str['act']=htmlspecialchars_decode($arr_b['con']);
		//dump($str);//dump($arr_b);
	    $this->assign('arr',$str);
        $this->display();
    }
     public function news(){
		$m=M("news");
		$str=$m->select();
	    $this->assign('arr',$str);
        $this->display();
    }
     public function news1(){
		$map['nid']=I('get.id');
		$m=M("news");
		$str=$m->where($map)->find();
		$str['con']=htmlspecialchars_decode($str['con']);
	    $this->assign('arr',$str);
	    //dump($str);
        $this->display();
    }
      public function member(){
		$m=M("people");
		$str=$m->select();
	    $this->assign('arr',$str);
        $this->display();
    }
}