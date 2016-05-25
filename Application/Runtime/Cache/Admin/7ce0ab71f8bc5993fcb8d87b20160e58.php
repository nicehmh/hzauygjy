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
              <a class="dropmenu" href="#"><i class="fa icon-calendar"></i><span>测评管理</span></a>
              <ul style="display:block">
                <li><a href="/Admin/index.php/Admin/Ceping/index"><i class="fa icon-angle-right"></i><span>测评对象</span></a></li>
                <li><a href="/Admin/index.php/Admin/Ceping/user"><i class="fa icon-angle-right"></i><span>测评用户</span></a></li>
                <li><a href="/Admin/index.php/Admin/Ceping/content"><i class="fa icon-angle-right"></i><span>测评内容</span></a></li>
                <li><a href="/Admin/index.php/Admin/Ceping/system"><i class="fa icon-angle-right"></i><span>系统设置</span></a></li>
                 <li><a href="/Admin/index.php/Admin/Ceping/calss"><i class="fa icon-angle-right"></i><span>测评班子</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="#"><i class="fa icon-paper-clip"></i><span>班子与个人统计</span></a>
              <ul>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>班级统计</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>个人统计</span></a></li>
                <li><a  href=""><i class="fa icon-angle-right"></i><span>特殊账号统计</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="#"><i class="fa icon-edit"></i><span>意见和建议</span></a>
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
					        用户管理
					      </h3><br/>
                        



                        <table class="table table-bordered table-striped border">
                                     
                            <tr>
                                <th rowspan="3">类别</th><th rowspan="3">测评内容/测评单位</th><th colspan="12">思想政治建设</th>
                                <th colspan="8">领导能力</th><th colspan="8">工作实绩</th><th colspan="12">党风廉政建设</th><th rowspan="2" colspan="4">总体评价<br />（可直接总评）</th><th rowspan="3">单位总结</th>
                            </tr>
                            <tr>
                                <td colspan="4">政治方向</td><td colspan="4">全局观念</td><td colspan="4">执行民主集中制</td><td colspan="4">科学决策</td><td colspan="4">管理驾驭</td><td colspan="4">发展状况</td><td colspan="4">党的建设</td><td colspan="4">工作作风</td><td colspan="4">廉政建设</td><td colspan="4">院(部处)务公开</td>
                            </tr>
                            <tr>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                            </tr>

                            <tr>
                                <td colspan="2">组织部</td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td>                           
                            </tr>
                            <tr>
                                <td  colspan="2">秘书处</td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td>                           
                            </tr>
                            <tr>
                                <td  colspan="2">宣传部</td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td> 
                                <td></td><td></td><td></td><td></td>  
                                <td></td><td></td><td></td><td></td>                           
                            </tr>
                        </table>
                    </div>
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