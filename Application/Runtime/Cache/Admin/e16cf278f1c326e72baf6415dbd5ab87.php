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
		         <div id="sidebar-left" class="span2">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li> 
            <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li>
            <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
            <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
            <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li>
            <li>
              <a class="dropmenu" href="#"><i class="icon-folder-close-alt"></i><span class="hidden-tablet"> Dropdown</span><span class="label label-important"> 3 </span></a>
              <ul>
                <li><a class="submenu" href="submenu.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 1</span></a></li>
                <li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 2</span></a></li>
                <li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
              </ul> 
            </li>
            <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
            <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
            <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
            <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
            <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
            <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
            <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
            <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
            <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
          </ul>
        </div>
      </div>
		   <div class="right content">
               <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>Article</p>
                	<p class="right right-d2">2015-8-13 星期四</p>
                </div>
                <div class="main">
                  <div class="panel panel-default">
                     <div class="panel-heading">
        					      <h3 class="panel-title">
        					          <i class="fa  icon-edit"></i>
        					          添加新文章
        					      </h3>
                     </div>
					           <form class="form-horizontal" role="form">
                              <div class="form-group">
                                 <label class="control-label col-sm-2 control2" for="title">*文章标题：</label>
                                 <input class="form-control control3" type="text" name="title" id="title" placeholder="请填写文章标题"/>
                              </div>
                              <div class="form-group">
                                 <label class="control-label col-sm-2 control4" for="author">*文章作者/来源：</label>
                                 <input class="form-control control1" type="text" name="author" id="author" placeholder="请填写文章作者/来源"/>
                              </div>
                               <div class="form-group">
                                 <label class="control-label col-sm-2 control4" for="column">*文章所属栏目：</label>
                                 <select class="form-control control1" name="column" id="column"/>
                                     <option value="0">学院动态</option>
                                     <option value="1">焦点新闻</option>
                                     <option value="2">用户管理</option>
                                     <option value="3">专区下载</option>
                                 </select>
                              </div>
                              <div class="form-group">
                              	   <label class="control-label col-sm-2 control4" for="detail">*文章正文：</label>
                              	   <textarea class="form-control control5" id="editor" height="400px;"></textarea>
                              </div>
                              <div class="form-action">
                                    <button class="btn btn-primary" type="submit">保存</button>
                                    <button class="btn btn-primary" type="reset">重置</button>
                              </div>
					          </form>
					       </div>
         </div>
		   </div>
		</div>
	   </div>
<script type="text/javascript" charset="utf-8" src="/Admin/Public/editor/kindeditor.js"></script>
<script type="text/javascript" charset="utf-8" src="/Admin/Public/editor/lang/zh_CN.js"> </script>
<script type="text/javascript" charset="utf-8" src="/Admin/Public/editor/lang/zh-cn/zh-cn.js"></script>
   <script type="text/javascript">  
       KindEditor.ready(function(K) {
                window.editor = K.create('#editor');
        });
   </script>
<script src="/Admin/Public/js/jquery.min.js"></script>
<script src="/Admin/Public/js/bootstrap.min.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i class="fa icon-envelope"></i>2632807692@qq.com&nbsp;&nbsp;<a href="https://github.com/SunShinewyf"><i class="fa  icon-github"></i>github</a>&nbsp;&nbsp; © 2015 powered by sunshine</p>
</div>
</body>
</html>