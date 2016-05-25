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
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>Article</p>
                	<p class="right right-d2">2015-8-13 星期四</p>
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         文章管理
					      </h3>
					 </div>
                     <div class="span6">
                         <form id="page-select"  class="form-inline" role="form">
                              每页显示
                               <select class="form-control">
						         <option>1</option>
						         <option>2</option>
						         <option>3</option>
						         <option>4</option>
						         <option>5</option>
						      </select>
						      条信息
                               &nbsp;&nbsp;&nbsp;&nbsp;
						      搜索选项：
                              <select class="form-control" style="width:150px;">
						         <option>标题</option>
						         <option>上传日期</option>
						         <option>作者</option>
						         
						      </select>
						      <input type="text" class="form-control" id="search" placeholder="请输入关键词" style="width:500px;"/>
						      <input type="submit" class="btn btn-success" value="搜索"/>
                         </form>
                     </div>
					  <table class="table table-bordered table-striped border">
                                        <thead class="top">
								      <tr>
								         <th>#</th>
								         <th>标题</th>
								         <th>作者来源</th>
								         <th>所属栏目</th>
								         <th>阅读量</th>
								         <th>添加时间</th>
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
								         <td>560001</td>
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
								         <td>560001</td>
								         <td class="small">
								           <a class="btn btn-xs btn-success"><i class="icon-edit">编辑</i></a>
								           <a class="btn btn-xs btn-info"><i class="icon-eye-open">查看</i></a>
								           <a class="btn btn-xs btn-danger"><i class="icon-trash">删除</i></a>
								         </td>
								      </tr>
								      <tr>
								         <td>Uma</td>
								         <td>Pune</td>
								         <td>411027</td>
								         <td>Tanmay</td>
								         <td>Bangalore</td>
								         <td>560001</td>
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