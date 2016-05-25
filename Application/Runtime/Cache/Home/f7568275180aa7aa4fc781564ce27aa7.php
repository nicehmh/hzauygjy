<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<title>华中农业大学-干部考核系统</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="/kaohe_hzau/Public/Front/Style/check.css" />
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/jquery.1.7.2.min.js"></script>
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/check.js"></script>
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/navfix.js"></script>
	<script type="text/javascript">
		alert("请填写中层领导班子评测！");
		$(document).ready(function(e) {  
		 $('#example1').navfix(0,999);    
		});
		//第一个值： 你期望导航在距离顶部多少的位置浮动
		//第二个值： 导航zindex
	</script>
</head>
<body>
	<div id="header">
		<div class="header"><img src="/kaohe_hzau/Public/Front/Images/header_bg1.jpg" /></div>
		<h1>中层领导干部测评系统</h1>
	</div>
	<div id="main">
		<div id="example1" style="background:#fafafa;width:100%;">
			<span class="title">中层领导班子测评</span>
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
		<?php $llp=0;?>
		<form name="form" method="post" action="">
			<table class="table_class" id="table2">
				<?php if(is_array($head)): $i = 0; $__LIST__ = $head;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$head): $mod = ($i % 2 );++$i;?><tr class="tr_class">
					<?php $llp++;?>
					<td style="display:none" class="hidden"><?php echo ($head["soit"]); ?></td>
					<td class="td_class"><?php echo ($head["category"]); ?></td>
					<td class="td_class"><?php echo ($head["department"]); ?></td>
				    <?php $__FOR_START_24684__=11;$__FOR_END_24684__=22;for($i=$__FOR_START_24684__;$i < $__FOR_END_24684__;$i+=1){ ?><td>
					    A<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=1 />B<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=2 />C<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=3 />D<input type="radio" name="<?php echo ($head["id"]); echo ($i); ?>" value=4 />
					</td><?php } ?>					
					<td style="width:80px;">
						<a href="javascript:;" onclick="javascript:window.open('/kaohe_hzau/index.php/Home/Yijian/index1?id=<?php echo ($head["id"]); ?>&name=<?php echo ($head["department"]); ?>','','height=300,width=600,top=150,left=400,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no')">提意见</a>
					</td>
					<td style="width:90px;">
						<a href="<?php echo ($head["url"]); ?>" target=_blanket>查看</a>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
			<div class="submit">
				<input type="Button" name="Modify" id="submit1" Value="提   交 " onClick="modify()">
           		<input type="Button" name="Deletelpp" id="submit2" Value="最终提交" onClick="deletelpp()">
				<span>( 选择提交，您在评测时间内还可以再次修改 &nbsp; 选择最终提交，您将不能再修改 )</span>
			</div>
		</form>
	</div>
	<?php if(is_array($star)): $i = 0; $__LIST__ = $star;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$star): $mod = ($i % 2 );++$i; $__FOR_START_9781__=11;$__FOR_END_9781__=22;for($i=$__FOR_START_9781__;$i < $__FOR_END_9781__;$i+=1){ ?><script type="text/javascript"> 
                     $("input[name='<?php echo ($star["head_id"]); echo ($i); ?>'][value=<?php echo ($star["$i"]); ?>]").attr("checked","true");

             </script><?php } endforeach; endif; else: echo "" ;endif; ?>
	<div id="footer">
		<h1>&copy2015 华中农业大学<h1>
		<h2>技术支持：<a href="http://www.52feidian.com" target="_blanket">沸点工作室</a></h2>
	</div>
	<script type="text/javascript">
        function modify(){	//判断是否有空没填写
         	var flag=0;//0为全部填写
         	for(var id=1;id<="<?php echo ($llp); ?>";id++){
         		var findnull=$("#table2 tr:nth-child("+id+") td:nth-child(14) input:checked").val();
         		if(findnull!=undefined){
         			var color=['#ddd','#F0FFFF','#FAFAD2','#FFE4E1','#eee'];
         			var num=$("#table2 tr:nth-child("+id+") td[class=hidden]").html();
					$("#table2 tr:nth-child("+id+") td:nth-child(14)").css("background",color[num]);
         		}
         		if(findnull==undefined){
         			$("#table2 tr:nth-child("+id+") td:nth-child(14)").css("background","#FF0000");
         			flag++;
         		}
         	}
         	if(flag!=0){
         		alert("还有"+flag+"个必选项未填");
         	}
         	if(flag==0){
         		document.form.action="/kaohe_hzau/index.php/home/check1/tijiao";
          		document.form.submit();    
         	}
        }
        function deletelpp(){	 
         	var flag=0;//0为全部填写
         	for(var id=1;id<="<?php echo ($llp); ?>";id++){
         		var findnull=$("#table2 tr:nth-child("+id+") td:nth-child(14) input:checked").val();
         		if(findnull!=undefined){
         			var color=['#ddd','#F0FFFF','#FAFAD2','#FFE4E1','#eee'];
         			var num=$("#table2 tr:nth-child("+id+") td[class=hidden]").html();
					$("#table2 tr:nth-child("+id+") td:nth-child(14)").css("background",color[num]);
         		}
         		if(findnull==undefined){
         			$("#table2 tr:nth-child("+id+") td:nth-child(14)").css("background","#FF0000");
         			flag++;
         		}
         	}
         	if(flag!=0){
         		alert("还有"+flag+"个必选项未填");
         	}
         	if(flag==0){
         		if(window.confirm('是否确定提交后不再修改？')){
	         		//确定，提交不再修改
	                document.form.action="/kaohe_hzau/index.php/home/check1/dosubmit";
	           		document.form.submit(); 
	                return true;
              	}else{
	                //不执行，没有提交
	                alert('您没有提交！');
	                return false;
             	}
         	} 
        }
       </script>
<script type="text/javascript">
	var color=['#ddd','#F0FFFF','#FAFAD2','#FFE4E1','#F0FFFF','#FAFAD2','#FFE4E1'];
	for(i=1;i<=<?php echo ($llp); ?>;i++){
		var num=$("#table2 tr:nth-child("+i+") td[class=hidden]").html();
		$("#table2 tr:nth-child("+i+")").css("background",color[num]);
	}		
</script>
</body>
</html>