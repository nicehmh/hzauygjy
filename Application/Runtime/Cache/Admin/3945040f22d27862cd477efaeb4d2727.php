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
					         班子内容管理
					      </h3>
					 </div>
					  <table class="table table-bordered table-striped border">
                                     
							<tr>
								<th rowspan="4">类别</th><th rowspan="4">测评内容/测评单位</th><th colspan="3">思想政治建设</th>
								<th colspan="2">领导能力</th><th colspan="2">工作实绩</th><th colspan="3">党风廉政建设</th><th rowspan="4">总体评价<br /></th><th rowspan="4">单位总结</th>
							</tr>
							<tr>
								<td>政治方向</td><td>全局观念</td><td>执行民主集中制</td><td>科学决策</td><td>管理驾驭</td><td>发展状况</td><td>党的建设</td><td>工作作风</td><td>廉政建设</td><td>院(部处)务公开</td>
							</tr>
							<tr>
						<!--	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i; $__FOR_START_4914__=1;$__FOR_END_4914__=5;for($i=$__FOR_START_4914__;$i < $__FOR_END_4914__;$i+=1){ ?><td><p> 政治立场，政治鉴别力和敏锐性；政策理论水平；贯彻党的教育方针和坚持社会主义办学方向</p></td><?php } endforeach; endif; else: echo "" ;endif; ?>-->
								<!-- start:文字可修改 -->
				            <?php $__FOR_START_6275__=1;$__FOR_END_6275__=11;for($i=$__FOR_START_6275__;$i < $__FOR_END_6275__;$i+=1){ ?><td><p><?php $col='a'.$i; echo $listlpp[$col];?></p></td><?php } ?>
								<!-- end:文字可修改 -->
							</tr>
						 	<tr>
					    	<form name="formlpp" method="post" action="">
							 <?php $__FOR_START_2560__=1;$__FOR_END_2560__=11;for($i=$__FOR_START_2560__;$i < $__FOR_END_2560__;$i+=1){ ?><td><a class="btn btn-xs btn-success"  data-toggle="modal"  data-target="#myModal<?php echo ($i); ?>"><i class="icon-edit">修改</i></a></td>
									<!-- 模态框（Modal） -->
	                            
										<div class="modal fade" id="myModal<?php echo ($i); ?>" tabindex="-1" role="dialog" 
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

										        <textarea rows="3" class="form-control" name="a<?php echo ($i); ?>"> <?php $col='a'.$i; echo $listlpp[$col];?></textarea>
										 
										    
										         </div>
										         <div class="modal-footer">
										            <button type="button" class="btn btn-default" 
										               data-dismiss="modal">关闭
										            </button>
										          <INPUT Type="button" class="btn btn-success" name="<?php echo ($i); ?>" value="提交修改" onClick="submitlpp()"/>
										         </div>
										  
										      </div><!-- /.modal-content -->
										</div><!-- /.modal -->
										</div><?php } ?>
							  </form>
							</tr>
						</table>							    
                </div>
               </div>
				</br></br></br></br>
				

			<div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					         个人内容管理
					      </h3>
					 </div>
                    
					  <table class="table table-bordered table-striped border">
                                     
							<tr>
								<th rowspan="3">考核项目/考核对象</th><th>德</th><th>能</th><th>勤</th><th>绩</th><th>廉</th><th rowspan="3">总体评价</th>
							</tr>
							<tr>
								 <?php $__FOR_START_29241__=1;$__FOR_END_29241__=6;for($i=$__FOR_START_29241__;$i < $__FOR_END_29241__;$i+=1){ ?><td><p><?php $col='b'.$i; echo $listlpp[$col];?></p></td><?php } ?>
							</tr>
							<tr>
								<form name="formper" method="get" action="">
							       <?php $__FOR_START_12414__=1;$__FOR_END_12414__=6;for($i=$__FOR_START_12414__;$i < $__FOR_END_12414__;$i+=1){ ?><td><a class="btn btn-xs btn-success"  data-toggle="modal"  data-target="#myModalb<?php echo ($i); ?>"><i class="icon-edit">修改</i></a></td>
								<!-- 模态框（Modal） -->
										<div class="modal fade" id="myModalb<?php echo ($i); ?>" tabindex="-1" role="dialog" 
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
										           <textarea rows="3" class="form-control" name="b<?php echo ($i); ?>"> <?php $col='b'.$i; echo $listlpp[$col];?></textarea>
										         </div>
										         <div class="modal-footer">
										            <button type="button" class="btn btn-default" 
										               data-dismiss="modal">关闭
										            </button>
										            <INPUT Type="button" class="btn btn-success" name="<?php echo ($i); ?>" value="提交修改" onClick="submitper()"/>
										         </div>
										      </div><!-- /.modal-content -->
										</div><!-- /.modal -->
										</div><?php } ?>
								  </form>
                                </tr>

								



						</table>							    
                </div>
               </div>
             




             </div>
		</div>
		</div>
		 <script type="text/javascript">
                                             function submitlpp()
                                             {
                                                document.formlpp.action="/kaohe_hzau/index.php/admin/Ceping/content_submitlpp";
                                                document.formlpp.submit(); 
                                             }
                                              function submitper()
                                             {
                                             	//alert("hello");
                                                document.formper.action="/kaohe_hzau/index.php/admin/Ceping/content_submitper";
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