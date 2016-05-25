<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>后台管理系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1" />
	<link href="/kaohe_hzau/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/kaohe_hzau/Public/css/font-awesome.min.css" rel="stylesheet">
	<link href="/kaohe_hzau/Public/css/base.css" rel="stylesheet">
	<link href="/kaohe_hzau/Public/css/admin.css" rel="stylesheet">
	<script type="text/javascript" src="/kaohe_hzau/Public/js/jquery.1.7.2.min.js"></script>
	<body>
	    <div class="nav-inner">
           <div class="nav-left">
           	   Admin System
           </div>

           <ul class="nav nav-right right">
                <li><a href="/kaohe_hzau/index.php/admin/Ceping/index"><span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;首页</a></li>
                <li><a href="/kaohe_hzau/index.php/admin/Login/index"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;退出</a></li>
           </ul>
        </div>
      	<div class="container-fluid-full">
		<div class="row-fluid">
		         <div id="sidebar-left" class="span2 left">
        <div class="nav-collapse sidebar-nav">
          <ul class="nav nav-tabs nav-stacked main-menu">
           
            <li class="submenu">
              <a class="dropmenu" href="# #collapseOne"data-toggle="collapse" data-parent="#accordion" 
          ><i class="fa icon-calendar"></i><span>测评管理</span></a>
              <ul  id="collapseOne" class="panel-collapse collapse in">
                <li><a href="/kaohe_hzau/index.php/Admin/Ceping/pergl"><i class="fa icon-angle-right"></i><span>测评对象</span></a></li>
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
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/specialtj"><i class="fa icon-angle-right"></i><span>特殊账号统计</span></a></li>
              </ul> 
            </li>
            <li class="submenu">
              <a class="dropmenu" href="# #collapseThree" data-toggle="collapse" data-parent="#accordion"><i class="fa icon-edit"></i><span>意见和建议</span></a>
              <ul id="collapseThree" class="panel-collapse collapse in">
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/classes"><i class="fa icon-angle-right"></i><span>班子具体意见</span></a></li>
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/personal"><i class="fa icon-angle-right"></i><span>个人具体意见</span></a></li>
                <li><a  href="/kaohe_hzau/index.php/Admin/Ceping/special"><i class="fa icon-angle-right"></i><span>特殊账号具体意见</span></a></li>
              </ul> 
            </li>


          </ul>
        </div>
      </div>

             <div class="right content">
                <div class="right-menu">
                	<p class="left"><i class="fa1 icon-home"></i>首页<i class="fa icon-angle-right"></i>Article</p>
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         系统设置
					         <a class="btn btn-sm btn-danger right right-d2" data-toggle="tooltip" 
                               data-placement="left"  title="点击此按钮会把历年数据清空" style="margin-right:4.5%;margin-top:-5px;"id="delete_all">重置</a>
                               <script type="text/javascript">
                               		$(function(){
                               			$("#delete_all").click(function(){
                               				if(window.confirm("重置将清除一年的数据库信息，是否确定？")){
	                               				if(window.confirm("请再次确定")){
	                               					window.location="/kaohe_hzau/index.php/admin/Ceping/system_delete";
	                               				}
                               				}
                               			});
                               		});
                               		
                               </script>
					      </h3>
					 </div>
                     <div class="span6">
						<script type="text/javascript" src="/kaohe_hzau/Public/js/showdate.js"></script>
                         <form id="page-select"  class="form-inline" role="form" name="set" action="/kaohe_hzau/index.php/admin/Ceping/set_time" >
                         请选择系统开放时间</br></br>
						    <input name="start_time" value="<?php echo ($list["settime"]); ?>" class="form-control inline systemtext" type="text" id="start_time" placeholder="请输入系统起始时间" onClick="return Calendar('start_time');" style="width:206px;background: #fefefe;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;">				    
						    &nbsp;&nbsp;到&nbsp;&nbsp;
						    <input name="end_time" value="<?php echo ($list["finatime"]); ?>" class="form-control inline systemtext" type="text" id="end_time" placeholder="请输入系统关闭时间" onClick="return Calendar('end_time');" style="width:206px;background: #fefefe;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;">
						    
						    <input type="submit" class="btn btn-success right right-d2" style="margin-right:85px;;" value="确定"/>
                         </form>
                     </div>
                     </br>
                                    	
                         &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp更改通知</br></br>
                         
						
						<form action="/kaohe_hzau/index.php/admin/Ceping/system_update" method="POST" name="jaj">
						    <textarea rows="3" class="form-control" style="width:85%;display:inline-block;" name="con"><?php echo ($list["content"]); ?></textarea>
					      	<input type="submit" class="btn btn-success right right-d2" style="margin-top:20px;float:right;"value="确定"/>
						</form>
						
						<div class="span6">
		 	<script type="text/javascript">
			$(function(){
				$("#submitchange").click(function(){
					if($("#newpassword").val()==""){
						alert("密码不能为空！");
					}else{
						if($("#newpassword").val()!=$("#confirmpwd").val()){
							alert("输入的密码不一致！");
						}else{
                       	 	$("#changepwd").submit();
						}
					}
				})
			})
			</script>
						<form action="/kaohe_hzau/index.php/admin/Ceping/system_pwd" method="POST" name="changepwd" id="changepwd" enctype="multipart/form-data">
							修改管理员密码</br></br>
						    请输入密码<input name="newpassword" id="newpassword" class="form-control" type="password" placeholder="请输入新密码" style="width:206px;background: #fefefe;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;"><br>

						    请确认输入密码<input name="confirmpwd" id="confirmpwd" class="form-control" type="password" placeholder="请确认输入密码" style="width:206px;background: #fefefe;border: 1px solid #bbb;font-size: 14px;color: #333;padding: 7px;border-radius: 3px;">
					      	<input type="button" class="btn btn-success right right-d2" style="margin-top:-60px;margin-right:87px;float:right;"value="确定" id="submitchange"/>
						</form>


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
	<p><i class="fa icon-twitter"></i>© 2015 华中农业大学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp技术支持：<a href="http://www.52feidian.com" target="_blanket"><i class="icon-leaf">&nbsp&nbsp沸点工作室</i></a>
</div>
</body>
</html>