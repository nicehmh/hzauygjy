<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<title>干部测评系统-意见</title>
	<meta charset="utf-8" />
	<style>
		*{
			margin:0px;
			padding:0px;
		}
		body{
			width:100%;
			background:#f6f6f6;
		}
		ul{
			list-style-type:none;
		}
		form{
			float:left;
			width:600px;
			margin-left:10px;
		}
		textarea{
			padding-left:2px;
			padding-right:2px;
		}
		textarea{
			margin-left:80px;
			margin-top:-15px;
			width:400px;
			min-height:180px;
		}
		input[name='submit']{
			margin-top:15px;
			margin-left:250px;
		}
	</style>
	<script type="text/javascript" src="/kaohe_hzau/Public/Front/Js/jquery-2.1.4.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#submit").click(function(){
				$.post("/kaohe_hzau/index.php/home/yijian/index1_submit",{
					select:$("#select").val(),
       				content:$("textarea").val()
				},function(){
					alert("评论成功！");
					window.close();
				});
				return false; 
			});
		});
	</script>
</head>
<body>
	<form action="/kaohe_hzau/index.php/home/yijian/index1_submit" method="post">
		<input type="hidden" name="select" id="select" value="<?php echo ($id); ?>" />
		<ul>
			<li><span>评论对象：</span><?php echo ($name); ?></li>
			<li><span>评论内容：</span></li>
			<li><textarea name="content"></textarea></li>
			<input type="submit" name="submit" id="submit" value="提交评论" />
		</ul>
	</form>
</body>
</html>