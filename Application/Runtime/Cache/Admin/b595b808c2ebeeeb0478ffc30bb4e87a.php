<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>后台首页</title>
	<link href="/kaohe_hzau/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/kaohe_hzau/Public/css/font-awesome.min.css" rel="stylesheet">
	<link href="/kaohe_hzau/Public/css/base.css" rel="stylesheet">
	<link href="/kaohe_hzau/Public/css/admin.css" rel="stylesheet">
	

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
              <a class="dropmenu" href="# #collapseOne"data-toggle="collapse" data-parent="#accordion" 
          ><i class="fa icon-calendar"></i><span>测评管理</span></a>
              <ul  id="collapseOne" class="panel-collapse collapse in">
                <li><a href="/kaohe_hzau/index.php/Admin/Ceping/index"><i class="fa icon-angle-right"></i><span>测评对象</span></a></li>
                <li><a href="/kaohe_hzau/index.php/Admin/Ceping/user"><i class="fa icon-angle-right"></i><span>测评用户</span></a></li>
                <li><a href="/kaohe_hzau/index.php/Admin/Ceping/content"><i class="fa icon-angle-right"></i><span>测评内容</span></a></li>
                <li><a href="/kaohe_hzau/index.php/Admin/Ceping/system"><i class="fa icon-angle-right"></i><span>系统设置</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="# #collapseTwo" data-toggle="collapse" data-parent="#accordion" ><i class="fa icon-paper-clip"></i><span>班子与个人统计</span></a>
              <ul id="collapseTwo" class="panel-collapse collapse in">
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/classlpp"><i class="fa icon-angle-right"></i><span>班子统计</span></a></li>
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/person"><i class="fa icon-angle-right"></i><span>个人统计</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>特殊账号统计</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="# #collapseThree" data-toggle="collapse" data-parent="#accordion"><i class="fa icon-edit"></i><span>意见和建议</span></a>
              <ul id="collapseThree" class="panel-collapse collapse in">
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/classes"><i class="fa icon-angle-right"></i><span>班子具体意见</span></a></li>
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/personal"><i class="fa icon-angle-right"></i><span>个人具体意见</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>特殊账号具体意见</span></a></li>
              </ul> 
            </li>


          </ul>
        </div>
      </div>
		   <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>Message</p>
                	<p class="right right-d2">2015-8-13 星期四</p>
                </div>

                <div class="main">
                    <div class="panel panel-default">
                         <div class="panel-heading">
					      <h3 class="panel-title">
					         欢迎admin管理员来到后台首页
					      </h3>
					    </div>
					     <div class="panel-body">
					          <p>admin管理员，您当前的身份是超级管理员，如果你是第一次登录你的帐号，请点击  <button type="button" class="btn btn-success">修改初始密码</button></p>
					          <p>在本系统中，你可以进行如下才操作</p>
					          <ul>
                                   <li><a href="">
                                       <img src="/kaohe_hzau/Public/images/image_add.png"/>
                                       <p>上传图片</p>
                                       </a>
                                   </li>
                                   <li><a href="">
                                       <img src="/kaohe_hzau/Public/images/paper_content.png"/>
                                       <p>编辑新文章</p>
                                       </a>
                                   </li>
                                   <li><a href="">
                                       <img src="/kaohe_hzau/Public/images/disturb.png"/>
                                       <p>浏览信息</p>
                                       </a>
                                   </li>
                                   <li><a href="">
                                       <img src="/kaohe_hzau/Public/images/9.png"/>
                                       <p>用户管理</p>
                                       </a>
                                   </li>
                                   <li><a href="">
                                       <img src="/kaohe_hzau/Public/images/setting.png"/>
                                       <p>修改个人信息</p>
                                       </a>
                                   </li>
					          </ul>   
						 </div>
                    </div>
                     <div class="panel panel-success">
                              <div class="panel-heading">
						      <h3 class="panel-title">
						          <i class="fa icon-user"></i>后台登陆记录一览
						      </h3>
					    	  </div>
					    	  <table class="table table-bordered table-striped">
                                      <thead class="top">
								      <tr>
								         <th>管理员名</th>
								         <th>管理权限</th>
								         <th>登陆时间</th>
								      </tr>
								   </thead>
								   <tbody>
								      <tr>
								         <td>Tanmay</td>
								         <td>Bangalore</td>
								         <td>560001</td>
								      </tr>
								      <tr>
								         <td>Sachin</td>
								         <td>Mumbai</td>
								         <td>400003</td>
								      </tr>
								      <tr>
								         <td>Uma</td>
								         <td>Pune</td>
								         <td>411027</td>
								      </tr>
								   </tbody>
				            </table>
				            <div class="col-sm-6 right">
                                 <ul class="pagination right">
                                  <li><a href="#">Previous</a></li>
								  <li class="active"><a href="#">1</a></li>
								  <li class="disabled"><a href="#">2</a></li>
								  <li><a href="#">3</a></li>
								  <li><a href="#">4</a></li>
								  <li><a href="#">5</a></li>
								  <li><a href="#">Next</a></li>
								</ul>
						  </div>
				     </div>
                </div>
		   </div>
		</div>
		</div>
		<script src="/kaohe_hzau/Public/js/jquery.min.js"></script>
<script src="/kaohe_hzau/Public/js/bootstrap.min.js"></script>
<script src="/kaohe_hzau/Public/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i class="fa icon-envelope"></i>2632807692@qq.com&nbsp;&nbsp;<a href="https://github.com/SunShinewyf"><i class="fa  icon-github"></i>github</a>&nbsp;&nbsp; © 2015 powered by sunshine</p>
</div>
</body>
</html>