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
					        个人统计<a class="btn btn-sm btn-info right right-d2" href="/kaohe_hzau/index.php/admin/Export/exportExcel">导出</a>
					      </h3><br/>
                        
                        <table class="table table-bordered table-striped border">
                                     
                            <tr>
                                <th rowspan="3">考核项目/考核对象</th><th colspan="4">德</th><th colspan="4">能</th><th colspan="4">勤</th><th colspan="4">绩</th><th colspan="4">廉</th><th rowspan="2" colspan="4">总体评价（可直接总评）</th>
                            </tr>
                            <tr>
                                <td colspan="4" style="width:60px;text-align:center;"><?php echo ($formcontent["b1"]); ?></td>
                                <td colspan="4" style="width:60px;text-align:center;"><?php echo ($formcontent["b2"]); ?></td>
                                <td colspan="4" style="width:60px;text-align:center;"><?php echo ($formcontent["b3"]); ?></td>
                                <td colspan="4" style="width:60px;text-align:center;"><?php echo ($formcontent["b4"]); ?></td>
                                <td colspan="4" style="width:60px;text-align:center;"><?php echo ($formcontent["b5"]); ?></td>
                            </tr>
                           <tr>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                <td>A</td><td>B</td><td>C</td><td>D</td>
                                
                            </tr>
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                                <td ><?php echo ($list["person"]); ?></td> 
                                <?php $__FOR_START_17964__=4;$__FOR_END_17964__=9;for($i=$__FOR_START_17964__;$i < $__FOR_END_17964__;$i+=1){ ?><td><?php $t1=$stre[$list['id']][$i]['1'];if($t1==0){}else{echo $t1;}?></td>
                                   <td><?php $t2=$stre[$list['id']][$i]['2'];if($t2==0){}else{echo $t2;}?></td>
                                   <td><?php $t3=$stre[$list['id']][$i]['3'];if($t3==0){}else{echo $t3;}?></td>
                                   <td><?php $t4=$stre[$list['id']][$i]['4'];if($t4==0){}else{echo $t4;}?></td><?php } ?>   
                                   <td><?php $t1=$stre[$list['id']]['3']['1'];if($t1==0){}else{echo $t1;}?></td>
                                   <td><?php $t2=$stre[$list['id']]['3']['2'];if($t2==0){}else{echo $t2;}?></td>
                                   <td><?php $t3=$stre[$list['id']]['3']['3'];if($t3==0){}else{echo $t3;}?></td>
                                   <td><?php $t4=$stre[$list['id']]['3']['4'];if($t4==0){}else{echo $t4;}?></td>                           
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </table>
                        <div style="text-align: center;color:#000;">
                            <?php echo ($page); ?>
                        </div>
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