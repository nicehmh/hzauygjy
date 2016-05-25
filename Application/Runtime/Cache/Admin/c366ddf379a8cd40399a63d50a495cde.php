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
                	<p class="right right-d2">已有<b style="color:#8470ff;font-size:150%;"><?php echo ($countlpp); ?></b>人评测</p>
                </div>
                <div class="main">
                <div class="panel panel-default">
                     <div class="panel-heading">
					      <h3 class="panel-title">
					          <i class="fa  icon-folder-open"></i>
					        用户管理
					      </h3><br/>
						  <form  id="page-select"  class="form-inline myform" role="form" action="" name="formlpp" method="post">
						       
								<input type="text" class="form-control inline persontext firsttext" name="addnum" id="search1" placeholder="请输入添加人数" style="width:180px;"/>&nbsp
								<INPUT Type="button" class="btn btn-success inline personbtn" value="新增" onClick="addlpp()"/>&nbsp&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

						      
						        <input type="text" class="form-control inline persontext" name="createnum" id="search2" placeholder="请输入特殊账号数目" style="width:180px;"/>&nbsp
						        <INPUT Type="button" class="btn btn-success inline personbtn" value="生成特殊账号" onClick="createlpp()"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

						       
						        <input type="text" class="form-control inline persontext" name="updatenum" id="search3" placeholder="请输入更新人数" style="width:180px;"/>&nbsp
						        <INPUT Type="Button" class="btn btn-success inline update" value="更新" onClick="updatelpp()"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

						       <INPUT Type="Button" class="btn btn-success inline import"  value="导出" onClick="exportlpp()"/>						     
						  </form>
						  <script type="text/javascript">
                                function addlpp()
                                {
                                	if($("#search1").val()==""){

                                	}else{
                                		document.formlpp.action="/kaohe_hzau/index.php/admin/Ceping/user_addlpp";
                                    	document.formlpp.submit(); 
                                	}
                                    
                                }
                                function updatelpp()
                                {	
                                	if($("#search3").val()==""){
                                		
                                	}else{
                                		if(window.confirm("确定要更新吗？")){
                                		document.formlpp.action="/kaohe_hzau/index.php/admin/Ceping/user_updatelpp";
                                    	document.formlpp.submit(); 
                                		}else{

                                		}
                                	}
                                	
                                    
                                }
                                function createlpp()
                                {
                                	if($("#search2").val()==""){

                                	}else{
                                		document.formlpp.action="/kaohe_hzau/index.php/admin/Ceping/user_createlpp";
                                   	    document.formlpp.submit(); 
                                	}
                                    
                                }
                                 function exportlpp()
                                {

                                    document.formlpp.action="/kaohe_hzau/index.php/admin/Export/exportExcel2";
                                    document.formlpp.submit(); 
                                }
                                $(function(){
                                    //alert($("td").html());
                                    for(var j=1;j<=20;j++){
                                        $td_index=$("#usertable tr:eq("+j+") td:nth-child(1)").html();
                                        if($td_index<=<?php echo ($sj); ?>){
                                            $("#usertable tr:eq("+j+")").css("background","lightblue");
                                        } 
                                    }         
                                })
                          </script>
					 </div>
                     
					  <table class="table table-bordered" id="usertable">
						 
						   <thead>
							  <tr>
							  	<th>序号</th>
								 <th>用户名</th>
								 <th>密码</th>
							  </tr>
						   </thead>
						   <?php $pid=($lo-1)*20;?>
						   <tbody>
						   	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
							  	<td class="$pid"><?php $pid=$pid+1; echo $pid;?></td>
								 <td><?php echo ($list["user"]); ?></td>								 
								 <td><?php echo ($list["password"]); ?></td>
							  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
						   </tbody>
						</table>
				     
                </div>
                <div style="text-align: center;color:#000;">
                 			<?php echo ($page); ?>
						</div>
					<!--	<nav style="text-align: center">
                 			<ul class="pagination">
							  <li><a href="#">&laquo;</a></li>
							  <li class="active"><a href="#">1</a></li>
							  <li><a href="#">2</a></li>
							  <li><a href="#">3</a></li>
							  <li><a href="#">4</a></li>
							  <li><a href="#">5</a></li>
							  <li><a href="#">&raquo;</a></li>
							</ul>
						</nav>	-->
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