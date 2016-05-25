<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function header(){
		$m=M("photo");
		$map['calss']="轮播图片";
		$arr=$m->where($map)->getField('con',3);;
		$this->assign('arr',$arr);
		dump($arr);
		$this->display();
    }
}