<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>阳光家园后台管理系统</title>
	
	 <link href="/hzauygjy/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <script src="/hzauygjy/Public/bootstrap/js/jquery.min.js"></script>
     <script src="/hzauygjy/Public/bootstrap/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="/hzauygjy/Public/back/css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/hzauygjy/Public/back/css/back.css" type="text/css"/>
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="/hzauygjy/Public/back/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="/hzauygjy/Public/back/js/hideshow.js" type="text/javascript"></script>
	<script src="/hzauygjy/Public/back/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/hzauygjy/Public/back/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="">阳光家园</a></h1>
			<h2 class="section_title">后台管理系统</h2><div class="btn_view_site"><a href="/hzauygjy/index.php/admin/Login/layout">退出</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>管理员(<a href="">0 条信息</a>)</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.html">后台管理系统</a> <div class="breadcrumb_divider"></div> <a class="current" id="dh">首页</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>首页</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="/hzauygjy/index.php/admin/Index/photo.html">图片管理</a></li>
			<li class="icn_photo"><a href="/hzauygjy/index.php/admin/Index/lnkh.html">我们的口号理念</a></li>
			<li class="icn_audio"><a href="/hzauygjy/index.php/admin/Index/renwu.html">我们的任务</a></li>
			<li class="icn_video"><a href="/hzauygjy/index.php/admin/Index/gain.html">我们的成果</a></li>
		</ul>
		<h3>阳光超市</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="/hzauygjy/index.php/admin/Index/day.html">日常工作</a></li>
			<li class="icn_security"><a href="/hzauygjy/index.php/admin/Index/activity.html">特色活动</a></li>
		</ul>
		<h3>新闻动态</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="/hzauygjy/index.php/admin/News/add.html">添加新闻</a></li>
		
			<li class="icn_categories"><a href="/hzauygjy/index.php/admin/News/view.html">查看新闻</a></li>
			
		</ul>
		<h3>团队成员</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="/hzauygjy/index.php/admin/People/add.html">添加成员</a></li>
			<li class="icn_view_users"><a href="/hzauygjy/index.php/admin/People/manager.html">管理成员</a></li>
			
		</ul>
		
		<footer>
			<hr />
			<p><strong> 版权所有&copy; 华中农业大学阳光家园</strong></p> 
			<p>技术支持：@<a href="http://www.52feidian.com/"  target="_blanket">华中农业大学沸点工作室</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	


<section id="main" class="column">
		
	

	
		
		<article class="module width_full">
		<form action="/hzauygjy/index.php/admin/index/lnkh_record" enctype="multipart/form-data" method="post" id="newform">
			<header><h3>我们的口号和理念</h3></header>
			
				<div class="module_content">
			 
						
						<fieldset>
							<label>具体内容</label><br/>
							  
							 <script id="container" name="con" type="text/plain" style="height:250px;width:100%;float:left;">
                                 <?php echo ($list); ?>
                             </script>
                             <!-- 配置文件 -->
                             <script type="text/javascript" src="/hzauygjy/Public/Ueditor/ueditor.config.js"></script>
                             <!-- 编辑器源码文件 -->
                             <script type="text/javascript" src="/hzauygjy/Public/Ueditor/ueditor.all.js"></script>
                             <!-- 实例化编辑器 -->
                             <script type="text/javascript">
                                 var ue = UE.getEditor('container');
                             </script>
						</fieldset>
						
			    
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="发表" class="alt_btn">
					<input type="reset" value="清空">
				</div>
			</footer>
		  </form>
		</article><!-- end of post new article -->
	
		
		<div class="spacer"></div>
	</section>
	
</body>

</html>