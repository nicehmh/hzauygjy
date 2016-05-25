<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>阳光家园</title>
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/header2.css">
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/market.css">
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/style.css">
	<script type="text/javascript" src="/hzauygjy/Public/Front/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/hzauygjy/Public/Front/js/koala.min.1.5.js"></script>
	<script>
		$("#demo3").als({
	visible_items: 4,
	scrolling_items: 2,
	orientation: "horizontal",
	circular: "yes",
	autoscroll: "yes",
	interval: 4000
     });
	</script>
</head>
<body>
	<!--头部-->
	<!--头部和导航栏-->
<div id="top">
    <div id="blank">
        <div class="logo"><img src="/hzauygjy/Public/Front/images/logo2.png"></div>
        <div class="logo2"><img src="/hzauygjy/Public/Front/images/6270.gif"></div>
        <div class="logo3"><img src="/hzauygjy/Public/Front/images/logo3.jpg"></div>
    </div>
    <div id="head">
            <ul>
            <li><a href="/hzauygjy/index.php/Home/Index/index.html">首页</a></li>
            <li><a href="/hzauygjy/index.php/Home/Index/news.html">新闻动态</a></li>
            <li><a href="/hzauygjy/index.php/Home/Index/heart.html">爱心轨迹</a></li>
            <li><a href="/hzauygjy/index.php/Home/Index/market.html">阳光超市</a></li>
            <li><a href="/hzauygjy/index.php/Home/Index/member.html">成员简介</a></li>
            <li><a href="/hzauygjy/index.php/Home/Index/applay.html">在线报名</a></li>
            <li><a href="/hzauygjy/index.php/Home/Index/relation.html">联系我们</a></li>
            </ul>
    </div>
	

	<div class="supermarket">
        <img src="/hzauygjy/Public/Front/images/market.jpg">
    </div>

	<div id="index-img">
        <div class="index-img-gun">
            <center>
            <section id="rt-showcase-surround">
                <div class="csslider1 autoplay">
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_0" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_1" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_slide1_2" type="radio" class="cs_anchor slide" >
                    <input name="cs_anchor1" autocomplete="off" id="cs_play1" type="radio" class="cs_anchor" checked>
                    <input name="cs_anchor1" autocomplete="off" id="cs_pause1" type="radio" class="cs_anchor" >
                    <ul>
                        <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo1.jpg" style="width: 100%;" class="set-img"></a>
                        </div>
                        <li class="num0 img">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo2.jpg" alt="Clouds" title="Clouds"  class="set-img"/></a>
                        </li>
                        <li class="num1 img">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo3.jpg" alt="Typewriter" title="Typewriter" class="set-img" /></a>
                        </li>
                        <li class="num2 img">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo4.jpg" alt="Bicycle" title="Bicycle" class="set-img" /></a>
                        </li>
                    </ul>
                     
                    <div class="cs_arrowprev">
                        <label class="num0" for="cs_slide1_0"></label>
                        <label class="num1" for="cs_slide1_1"></label>
                        <label class="num2" for="cs_slide1_2"></label>
                    </div>
                    <div class="cs_arrownext">
                        <label class="num0" for="cs_slide1_0"></label>
                        <label class="num1" for="cs_slide1_1"></label>
                        <label class="num2" for="cs_slide1_2"></label>
                    </div>
                    
                    <div class="cs_bullets">
                        <label class="num0" for="cs_slide1_0">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num1" for="cs_slide1_1">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num2" for="cs_slide1_2">
                            <span class="cs_point"></span>
                        </label>
                    </div>
                </div>
            </section>        <!-- /slider -->
            </center>
        </div>
    </div>

		
	</div>
</div>
	<div id="main">
	<div class="nav"><p>首页>>阳光超市</p></div>
		<div class="content">
			<div class="top">
				<h3>日常工作</h3>
				<?php echo ($arr["day"]); ?>
			</div>
			<div class="center"></div>
			<div class="middle">
				<h3>特色活动</h3>
				<?php echo ($arr["act"]); ?>
				</div>
			<div class="center"></div>

<!--<div class="als-container" id="demo3">
  <span class="als-prev"><img src="/hzauygjy/Public/Front/images/index1.jpg" alt="prev" title="previous" /></span>
  <div class="als-viewport">
    <ul class="als-wrapper">
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x1.png" alt="orange" title="orange" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x2.png" alt="apple" title="apple" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x3.png" alt="banana" title="banana" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x4.png" alt="blueberry" title="blueberry" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x5.png" alt="watermelon" title="watermelon" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x6.jpg" alt="cherry" title="cherry" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x7.jpg" alt="strawberry" title="strawberry" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x8.jpg" alt="avocado" title="avocado" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x9.jpg" alt="pear" title="pear" /></li>
      <li class="als-item"><img src="/hzauygjy/Public/Front/images/x10.png" alt="pineapple" title="pineapple" /></li>
    </ul>
  </div>
  <span class="als-next"><img src="images/thin_right_arrow_333.png" alt="next" title="next" /></span>
</div>-->


		</div>
	</div>
	<!--尾部-->
    <div id="footer">
	<div class="footer2"><p>版权所有:华中农业大学阳光家园公益组织&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：刘xx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEL:159xxxxxxxx</p></div>
	<div class="footer3"><p>技术支持：@华中农业大学沸点工作室</p></div>
</div>
</body>
</html>