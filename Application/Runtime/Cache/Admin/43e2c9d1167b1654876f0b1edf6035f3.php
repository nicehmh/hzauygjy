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
		// alert("请填写部分正处级干部评测！");
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
			<span class="title">部分正处级干部评测</span>
			<table class="table_class">
				<tr>
					<th rowspan="2">考核项目/考核对象</th><th>德</th><th>能</th><th>勤</th><th>绩</th><th>廉</th><th rowspan="2">总体评价（可直接总评）</th><th rowspan="2">提意见</th>
				</tr>
				<tr>
					<td><p><?php echo ($formcontent["b1"]); ?></p></td>
					<td><p><?php echo ($formcontent["b2"]); ?></p></td>
					<td><p><?php echo ($formcontent["b3"]); ?></p></td>
					<td><p><?php echo ($formcontent["b4"]); ?></p></td>
					<td><p><?php echo ($formcontent["b5"]); ?></p></td>
				</tr>
			</table>
		</div>
			<form action="" method="post" name="form">
			<table class="table_class" id="table2">
				<?php if(is_array($person)): $i = 0; $__LIST__ = $person;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$head): $mod = ($i % 2 );++$i;?><tr class="tr_class">
					<td class="td_class"><?php echo ($head["person"]); ?></td>
					<?php $__FOR_START_12304__=1;$__FOR_END_12304__=7;for($i=$__FOR_START_12304__;$i < $__FOR_END_12304__;$i+=1){ ?><td>
			        	A<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=1 />
						B<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=2 />
						C<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=3 />
						D<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=4 />
					</td><?php } ?>
					<td>
						<a href="javascript:;">提意见</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			
		
	</div>
	<?php if(is_array($star)): $i = 0; $__LIST__ = $star;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$star): $mod = ($i % 2 );++$i; $__FOR_START_1801__=1;$__FOR_END_1801__=7;for($i=$__FOR_START_1801__;$i < $__FOR_END_1801__;$i+=1){ ?><script type="text/javascript"> 
                     $("input[name='<?php echo ($star["head_id"]); echo ($i); ?>'][value=<?php echo ($star["$i"]); ?>]").attr("checked","true");
             </script><?php } endforeach; endif; else: echo "" ;endif; ?>
	<div id="footer">
		<h1>&copy2015 华中农业大学<h1>
		<h2>技术支持：<a href="http://www.52feidian.com" target="_blanket">沸点工作室</a></h2>
	</div>
</body>
</html>