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
                <li><a href=""><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		         <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
            <li class="submenu"><a href=""><i class="fa icon-home"></i><span>首页管理</span></a></li> 
            <li class="submenu">
              <a class="dropmenu" href="#"><i class="fa icon-calendar"></i><span>测评管理</span><span class="label label-important"> 4 </span></a>
              <ul style="display:block">
                <li><a href=""><i class="fa icon-angle-right"></i><span>测评对象</span></a></li>
                <li><a href=""><i class="fa icon-angle-right"></i><span>测评用户</span></a></li>
                <li><a href=""><i class="fa icon-angle-right"></i><span>测评内容</span></a></li>
                <li><a href=""><i class="fa icon-angle-right"></i><span>系统设置</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="#"><i class="fa icon-paper-clip"></i><span>班子与个人统计</span><span class="label label-important"> 3 </span></a>
              <ul>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>班级统计</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>个人统计</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>特殊账号统计</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="#"><i class="fa icon-edit"></i><span>意见和建议</span><span class="label label-important"> 3 </span></a>
              <ul>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>班子具体意见</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>个人具体意见</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>特殊账号具体意见</span></a></li>
              </ul> 
            </li>


          </ul>
        </div>
      </div>
		    <div class="right content">
                <div class="right-menu">
                    <p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>Picture</p>
                	<p class="right right-d2">2015-8-13 星期四</p>
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
                        <h3 class="panel-title">
					          <i class="fa  icon-cloud-upload"></i>
					         图片上传
					    </h3>
                     </div>
                     <form class="form-horizontal" role="form">
                           <div class="form-group">
                                 <label class="control-label col-sm-2 control2" for="describe">*图片描述：</label>
                                 <input class="form-control control3" type="text" name="describe" id="describe" placeholder="请填写图片描述"/>
                           </div>
                           <div class="form-group">
                                  <label class="control-label col-sm-2 control2" for="inputfile">文件输入：</label>
                                  <input type="file"  id="inputfile" class="control2" placeholder="请选择图片">
                                  <p class="help-block">请务必选择360*230的图片，不超过2MB</p>
                           </div>
                                  <button class="btn btn-primary" style="margin-left:250px;margin-bottom:20px;" type="submit">确认上传</button>

                     </form>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa   icon-picture"></i>
					         图片管理
					      </h3>
					 </div>
					 <table class="table table-bordered table-striped border">
                                  <thead class="top">
								      <tr>
								         <th>#</th>
								         <th>图片名</th>
								         <th>图片描述</th>
								         <th>上传管理员</th>
								         <th>上传时间</th>
								         <th>操作</th>
								      </tr>
								  </thead>
								  <tbody>
                                     <tr>
								         <td>Tanmay</td>
								         <td>Bangalore</td>
								         <td>560001</td>
								         <td>Tanmay</td>
								         <td>Bangalore</td>
								         <td class="small">
								           <a class="btn btn-xs btn-success"><i class="icon-edit">编辑</i></a>
								           <a class="btn btn-xs btn-info"><i class="icon-eye-open">查看</i></a>
								           <a class="btn btn-xs btn-danger"><i class="icon-trash">删除</i></a>
								         </td>
								      <tr>
								         <td>Sachin</td>
								         <td>Mumbai</td>
								         <td>400003</td>
								         <td>Tanmay</td>
								         <td>Bangalore</td>
								         <td class="small">
								           <a class="btn btn-xs btn-success"><i class="icon-edit">编辑</i></a>
								           <a class="btn btn-xs btn-info"><i class="icon-eye-open">查看</i></a>
								           <a class="btn btn-xs btn-danger"><i class="icon-trash">删除</i></a>
								         </td>
								      </tr>
								  </tbody>
					</table>
					   <ul class="pagination right">
                                  <li><a href="#">&laquo;&nbsp;&nbsp;Previous</a></li>
								  <li class="active"><a href="#">1</a></li>
								  <li class="disabled"><a href="#">2</a></li>
								  <li><a href="#">3</a></li>
								  <li><a href="#">4</a></li>
								  <li><a href="#">5</a></li>
								  <li><a href="#">Next&nbsp;&nbsp;&raquo;;</a></li>
					 </ul>

                </div>

                </div>
            </div>
		</div>
		</div>
<script src="/Admin/Public/js/jquery.min.js"></script>
<script src="/Admin/Public/js/bootstrap.min.js"></script>
<script src="/Admin/Public/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i class="fa icon-envelope"></i>2632807692@qq.com&nbsp;&nbsp;<a href="https://github.com/SunShinewyf"><i class="fa  icon-github"></i>github</a>&nbsp;&nbsp; © 2015 powered by sunshine</p>
</div>
</body>
</html>