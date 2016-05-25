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
					         对象管理
					           <a class="right right-d2"  style="color:blue;" href="/kaohe_hzau/index.php/admin/Ceping/pergl"><span style="font-size:14px;color:#333;">转换到>> </span>领导班子</a>
 
					      </h3>
					 </div>
                    
					  <table class="table table-bordered table-striped border">
                                 <thead class="top">
								      <tr>
								       <th width=200px>姓名</th>
								        <th >职务</th>
								      
								         
								         
								         <th width=220px>管理</th>
								      </tr>
								   </thead>
								   <tbody>
								   	<?php if(is_array($listlpp)): foreach($listlpp as $key=>$listlpp): ?><tr>
								       <td><?php echo ($listlpp["person"]); ?></td>							        
										<td><?php echo ($listlpp["position"]); ?></td>
								         <td class="small">
								         <!--  <a class="btn btn-xs btn-success" data-toggle="modal"  data-target="#myModal{listlpp.id}"><i class="icon-edit">编辑</i></a>
								           	<!-- 模态框（Modal） 
										<div class="modal fade" id="myModal{listlpp.id}" tabindex="-1" role="dialog" 
										   aria-labelledby="myModalLabel" aria-hidden="true">
										   <div class="modal-dialog">
										      <div class="modal-content">
										         <div class="modal-header">
										            <button type="button" class="close" 
										               data-dismiss="modal" aria-hidden="true">
										                  &times;
										            </button>
										            <h4 class="modal-title" id="myModalLabel">
										               修改内容
										            </h4>
										         </div>
										         <div class="modal-body">
										           area></area>
										         </div>
										         <div class="modal-footer">
										            <button type="button" class="btn btn-default" 
										               data-dismiss="modal">关闭
										            </button>
										            <button type="button" class="btn btn-primary">
										               提交更改
										            </button>
										         </div>
										      </div><!-- /.modal-content -->
										<!--</div><!-- /.modal -->
										<!--</div>-->
								          
								           <a class="btn btn-xs btn-danger" href="/kaohe_hzau/index.php/admin/Ceping/delete_person?id=<?php echo ($listlpp["id"]); ?>"><i class="icon-trash">删除</i></a>
										   <a class="btn btn-xs btn-info" data-toggle="modal"  data-target="#myModallpp<?php echo ($listlpp["id"]); ?>"><i class="icon-trash">编辑</i></a>
								         </td>

								
									</tr>
									<form name="formdep" method="get" action="/kaohe_hzau/index.php/admin/Ceping/update_person">
								           <!-- 模态框（Modal） -->
										<div class="modal fade" id="myModallpp<?php echo ($listlpp["id"]); ?>" tabindex="-1" role="dialog" 
										   aria-labelledby="myModalLabel" aria-hidden="true">
										   <div class="modal-dialog">
										      <div class="modal-content">
										         <div class="modal-header">
										            <button type="button" class="close" 
										               data-dismiss="modal" aria-hidden="true">
										                  &times;
										            </button>
										            <h4 class="modal-title" id="myModalLabel">
										               修改内容
										            </h4>
										         </div>
										         <div class="modal-body">
												请输入姓名：<input name="person" class="form-control" placeholder="请输入姓名" value="<?php echo ($listlpp["person"]); ?>" type="text"/><br/>
                                                   请输入职务：<input name="position" class="form-control" placeholder="请输入职务" value="<?php echo ($listlpp["position"]); ?>" type="text"/>
												    
										         </div>
										         <div class="modal-footer">
										            <button type="button" class="btn btn-default" 
										               data-dismiss="modal">关闭
										            </button>
										            <input type="hidden" name="action" value="submitted"> 
													<input type="hidden" name="id" value="<?php echo ($listlpp["id"]); ?>"/>
										            <input type="submit" class="btn btn-success" name="applpp" value="提交修改"/>
										         </div>
										      </div><!-- /.modal-content -->
										</div><!-- /.modal -->
										</div>
								    </form><?php endforeach; endif; ?>

								   
								   </tbody>							    
				  			   </table>
						  </div>
						 <a class="btn btn-sm btn-info right right-d2 " data-toggle="modal"  data-target="#myModal"><i class="icon-pencil">添加</i></a>
						                <form name="formper" method="post" action="">
								           <!-- 模态框（Modal） -->
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" 
										   aria-labelledby="myModalLabel" aria-hidden="true">
										   <div class="modal-dialog">
										      <div class="modal-content">
										         <div class="modal-header">
										            <button type="button" class="close" 
										               data-dismiss="modal" aria-hidden="true">
										                  &times;
										            </button>
										            <h4 class="modal-title" id="myModalLabel">
										               修改内容
										            </h4>
										         </div>
										         <div class="modal-body">
										           请输入姓名：<input name="person" class="form-control" placeholder="请输入姓名" type="text"/><br/>
                                                  请输入职位： <input name="position" class="form-control" placeholder="请输入职位" type="text"/>
										         </div>
										         <div class="modal-footer">
										            <button type="button" class="btn btn-default" 
										               data-dismiss="modal">关闭
										            </button>
										            <input type="hidden" name="action" value="submitted"> 
										            <input type="button" class="btn btn-success" name="app" value="提交修改" onClick="submitper()"/>
										         </div>
										      </div><!-- /.modal-content -->
										</div><!-- /.modal -->
										</div>
								    </form>
					  </div>

               </div>
             </div>
             <div style="text-align: center;color:#000;">
                 			<?php echo ($page); ?>
						</div>
		</div>
		</div>
		<script type="text/javascript">
                                              function submitper()
                                             {
                                             	//alert("hello");
                                                document.formper.action="/kaohe_hzau/index.php/admin/Ceping/set_person";
                                                document.formper.submit(); 
                                             }
                 </script>
		<script src="/kaohe_hzau/Public/js/jquery.min.js"></script>
<script src="/kaohe_hzau/Public/js/bootstrap.min.js"></script>
<script src="/kaohe_hzau/Public/js/admin.js"></script>

<div class="clearfix"></div>
<div class="footer">
	<p><i class="fa icon-twitter"></i>© 2015 华中农业大学&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp技术支持：<a href="http://www.52feidian.com" target="_blanket"><i class="icon-leaf">&nbsp&nbsp沸点工作室</i></a>
</div>
</body>
</html>