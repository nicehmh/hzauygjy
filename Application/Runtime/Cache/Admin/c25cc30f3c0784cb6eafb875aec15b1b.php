<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>后台首页</title>
	<link href="/Admin/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Admin/Public/css/font-awesome.min.css" rel="stylesheet">
	<link href="/Admin/Public/css/base.css" rel="stylesheet">
	<link href="/Admin/Public/css/admin.css" rel="stylesheet">
	

	<body>
	    <div class="nav-inner">
           <div class="nav-left">
           	   Admin System
           </div>

           <ul class="nav nav-right right">
                <li><a href=""><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;首页</a></li>
                <li><a href=""><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;修改密码</a></li>
                <li><a href=""><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		   <div class="slider left">
    <ul class="slide-menu">
        <li><a href=""><i class="fa icon-home"></i>首页介绍</a></li>
        <li>
           <a href=""><i class="fa icon-picture"></i>首页大图管理<i class="arrow icon-double-angle-right"></i></a>
           <ul class="child-menu">
               <li><a href=""><i class="fa icon-angle-right"></i>添加图片</a></li>
               <li><a href=""><i class="fa icon-angle-right"></i>修改图片</a></li>
               <li><a href=""><i class="fa icon-angle-right"></i>删除图片</a></li>
           </ul>
        </li>
        <li>
          <a href=""><i class="fa icon-edit"></i>文章管理<i class="arrow icon-double-angle-right"></i></a>
          <ul class="child-menu">
              <li><a href=""><i class="fa icon-angle-right"></i>添加文章</a></li>
              <li><a href=""><i class="fa icon-angle-right"></i>修改文章</a></li>
              <li><a href=""><i class="fa icon-angle-right"></i>文章列表</a></li>
          </ul>
        </li>

         <li>
          <a href=""><i class="fa icon-edit"></i>用户管理<i class="arrow icon-double-angle-right"></i></a>
          <ul class="child-menu">
              <li><a href=""><i class="fa icon-angle-right"></i>添加用户</a></li>
              <li><a href=""><i class="fa icon-angle-right"></i>修改用户</a></li>
              <li><a href=""><i class="fa icon-angle-right"></i>文章列表</a></li>
          </ul>
        </li>

        <li>
          <a href=""><i class="fa icon-cogs"></i>系统管理<i class="arrow icon-double-angle-right"></i></a>
          <ul class="child-menu">
              <li><a href=""><i class="fa icon-angle-right"></i>用户管理</a></li>
              <li><a href=""><i class="fa icon-angle-right"></i>栏目管理</a></li>
              <li><a href=""><i class="fa icon-angle-right"></i>更改密码</a></li>
          </ul>
        </li>

    </ul>

</div>
           <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>password</p>
                	<p class="right right-d2">2015-8-13 星期四</p>
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa   icon-edit"></i>
					          修改密码
					      </h3>
					 </div>
					  <form class="form-horizontal" role="form">
                              <div class="form-group">
                                 <label class="control-label col-sm-2 control2" for="old">*旧密码：</label>
                                 <input class="form-control control3" type="password" name="old" id="old" placeholder="请填写旧密码"/>
                              </div>
                               <div class="form-group">
                                 <label class="control-label col-sm-2 control4" for="new">*新密码：</label>
                                 <input class="form-control control3" type="password" name="old" id="old" placeholder="请填写旧密码"/>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-sm-2 control4" for="comfirm">*新密码：</label>
                                 <input class="form-control control3" type="password" name="comfirm" id="comfirm" placeholder="请填写确认密码"/>
                              </div>
                             <button class="btn btn-primary" style="margin-left:250px;margin-bottom:20px;" type="submit">确认修改</button>
					 </form>
			   </div>
			   </div>
           </div>
		</div>
		</div>
<script src="/Admin/Public/js/jquery.min.js"></script>
<script src="/Admin/Public/js/bootstrap.min.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i class="fa icon-envelope"></i>2632807692@qq.com&nbsp;&nbsp;<a href="https://github.com/SunShinewyf"><i class="fa  icon-github"></i>github</a>&nbsp;&nbsp; © 2015 powered by sunshine</p>
</div>
</body>
</html>