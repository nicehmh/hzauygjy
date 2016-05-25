<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>华中农业大学-干部考核系统</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="/kaohe_hzau/Public/Front/Style/check.css" />
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/check.js"></script>
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/jquery.1.7.2.min.js"></script>
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/navfix.js"></script>
	<script type="text/javascript">
		// alert("请填写中层领导班子评测！");
		$(document).ready(function(e) {  
		 $('#example1').navfix(0,999);    
		  $("input").attr("disabled","true");
		});
		//第一个值： 你期望导航在距离顶部多少的位置浮动
		//第二个值： 导航zindex
	</script>
</head>
<body>
	<div id="header">
		<div class="header"></div>
		<h1>华中农业大学中层领导干部测评系统</h1>
	</div>
	<div id="main">
		<div id="example1" style="background:#fafafa;width:100%;">
			<span class="title">中层领导班子评测</span>
			<table class="table_class">
			<tr>
				<th rowspan="3">类别</th><th rowspan="3">测评内容/测评单位</th><th colspan="3">思想政治建设</th>
				<th colspan="2">领导能力</th><th colspan="2">工作实绩</th><th colspan="3">党风廉政建设</th><th rowspan="3">总体评价<br />（可直接总评）</th><th rowspan="3" style="width:80px;">提意见</th><th rowspan="3" style="width:90px;">单位总结</th>
			</tr>
			<tr>
				<td>政治方向</td><td>全局观念</td><td>执行民主集中制</td><td>科学决策</td><td>管理驾驭</td><td>发展状况</td><td>党的建设</td><td>工作作风</td><td>廉政建设</td><td>院(部处)务公开</td>
			</tr>
			<tr>
				<!-- start:文字可修改 -->
				<td><p><?php echo ($formcontent["a1"]); ?></p></td>
				<td><p><?php echo ($formcontent["a2"]); ?></p></td>
				<td><p><?php echo ($formcontent["a3"]); ?></p></td>
				<td><p><?php echo ($formcontent["a4"]); ?></p></td>
				<td><p><?php echo ($formcontent["a5"]); ?></p></td>
				<td><p><?php echo ($formcontent["a6"]); ?></p></td>
				<td><p><?php echo ($formcontent["a7"]); ?></p></td>
				<td><p><?php echo ($formcontent["a8"]); ?></p></td>
				<td><p><?php echo ($formcontent["a9"]); ?></p></td>
				<td><p><?php echo ($formcontent["a10"]); ?></p></td>
				<!-- end:文字可修改 -->
			</tr>
			</table>
		</div>
		<form name="form" method="post" action="">
			<table class="table_class" id="table2">
				<?php if(is_array($head)): $i = 0; $__LIST__ = $head;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$head): $mod = ($i % 2 );++$i;?><tr class="tr_class">
					<td class="td_class"><?php echo ($head["category"]); ?></td>
					<td class="td_class"><?php echo ($head["department"]); ?></td>
				    <?php $__FOR_START_20484__=11;$__FOR_END_20484__=22;for($i=$__FOR_START_20484__;$i < $__FOR_END_20484__;$i+=1){ ?><td>
					    A<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=1 />B<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=2 />C<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=3 />D<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=4 />
					</td><?php } ?>					
					<td style="width:80px;">
						<a href="javascript:;">提意见</a>
					</td>
					<td style="width:90px;">
						<a href="javascript:;">查看</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		
		</form>
	</div>
	<?php if(is_array($star)): $i = 0; $__LIST__ = $star;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$star): $mod = ($i % 2 );++$i; $__FOR_START_31213__=11;$__FOR_END_31213__=22;for($i=$__FOR_START_31213__;$i < $__FOR_END_31213__;$i+=1){ ?><script type="text/javascript"> 
                     $("input[name='<?php echo ($star["head_id"]); echo ($i); ?>'][value=<?php echo ($star["$i"]); ?>]").attr("checked","true");

             </script><?php } endforeach; endif; else: echo "" ;endif; ?>
	<div id="footer">
		<h1>&copy2015 华中农业大学<h1>
		<h2>技术支持：<a href="http://www.52feidian.com" target="_blanket">沸点工作室</a></h2>
	</div>
</body>
</html>