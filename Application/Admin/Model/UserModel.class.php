<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
       protected $_validate = array(
           array('user','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证user字段是否唯一
       );
}
?>
