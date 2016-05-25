<?php
namespace Admin\Model;
use Think\Model;
class DepartmentModel extends Model{
       protected $_validate = array(
           array('department','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证department字段是否唯一
       );
}
?>
