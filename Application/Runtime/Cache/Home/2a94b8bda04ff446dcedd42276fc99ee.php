<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />
	<title>阳光家园</title>
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/header.css">
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/index.css">
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/style.css">
</head>
<body>
	<!--头部-->
	<!--头部和导航栏-->
<div id="top">
    <div id="blank">
        <div class="logo"><img src="/hzauygjy/Public/Front/images/logo2.png"></div>
        <div class="logo2"><a href="/hzauygjy/index.php/Admin/Login/index.html" target="_blank"><img src="/hzauygjy/Public/Front/images/6270.gif"></a></div>
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
                            <p class="lunbo_p"><a target="" href="">华农大&nbsp;&nbsp;&nbsp;&nbsp;关工委&nbsp;&nbsp;&nbsp;&nbsp;阳光家园揭牌仪式</a>
                     </p>
                        </div>
                        <li class="num0 img">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo2.jpg" alt="Clouds" title="Clouds"  class="set-img"/></a>
                            <p class="lunbo_p"><a target="" href="">华农大&nbsp;&nbsp;&nbsp;&nbsp;关工委&nbsp;&nbsp;&nbsp;&nbsp;阳光家园揭牌仪式</a>
                     </p>
                        </li>
                        <li class="num1 img">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo3.jpg" alt="Typewriter" title="Typewriter" class="set-img" /></a>
                            <p class="lunbo_p"><a target="" href="">华农大&nbsp;&nbsp;&nbsp;&nbsp;关工委&nbsp;&nbsp;&nbsp;&nbsp;阳光家园揭牌仪式</a>
                     </p>
                        </li>
                        <li class="num2 img">
                            <a href=""><img src="/hzauygjy/Public/front/images/lunbo4.jpg" alt="Bicycle" title="Bicycle" class="set-img" /></a>
                            <p class="lunbo_p"><a target="" href="">华农大&nbsp;&nbsp;&nbsp;&nbsp;关工委&nbsp;&nbsp;&nbsp;&nbsp;阳光家园揭牌仪式</a>
                     </p>
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
                    
                   <!-- <div class="cs_bullets">
                        <label class="num0" for="cs_slide1_0">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num1" for="cs_slide1_1">
                            <span class="cs_point"></span>
                        </label>
                        <label class="num2" for="cs_slide1_2">
                            <span class="cs_point"></span>
                        </label>
                    </div>-->
                </div>
            </section>        <!-- /slider -->
            </center>
        </div>
    </div>

		
	</div>
</div>
	<div id="main">
		<div class="content">
			<div class="left">
			   <!-- <h2>WHAT IS </h2>
			    <h3>&nbsp;&nbsp;阳光家园</h3>-->
				<div class="index1"><p>我们的理念和口号</p></div>
				<?php echo ($arr["khln"]); ?>
				<div class="index1"><p>我们的任务</p></div>
				<?php echo ($arr["rw"]); ?>
				<div class="index1"><p>我们的成果</p></div>
                <?php echo ($arr["cg"]); ?>
			</div>
			<div class="center"></div>
			<div class="right">
			    <ul>
			    <li>
			        <a target="" href="/hzauygjy/index.php/Home/Index/news1.html">
                    <img width="200" height="230" border="0" alt="" name="" src="/hzauygjy/Public/Front/images/news21.jpg">
                     </a>
                     <p class="img_p">
                     <a target="" href="/hzauygjy/index.php/Home/Index/news1.html">甘孜藏区行</a>
                     </p>
                </li>
                <li>
                	<a target="" href="/hzauygjy/index.php/Home/Index/news1.html">
                    <img width="200" height="230" border="0" alt="" name="" src="/hzauygjy/Public/Front/images/news3.jpg">
                     </a>
                     <p class="img_p">
                     <a target="" href="/hzauygjy/index.php/Home/Index/news1.html">校园爱心义卖</a>
                     </p>
                </li>
                <li>
                	<a target="" href="/hzauygjy/index.php/Home/Index/news1.html">
                    <img width="200" height="230" border="0" alt="" name="" src="/hzauygjy/Public/Front/images/lunbo1.jpg">
                     </a>
                     <p class="img_p">
                     <a target="" href="http://news1.hzau.edu.cn/showarticle.php?aid=19851">阳光家园揭牌</a>
                     </p>
                </li>
                <li>
                	<a target="" href="/hzauygjy/index.php/Home/Index/news1.html">
                    <img width="200" height="230" border="0" alt="" name="" src="/hzauygjy/Public/Front/images/x2.png">
                     </a>
                     <p class="img_p">
                     <a target="" href="http://news.hzau.edu.cn/2011/0307/24411.shtml">阳光超市开业</a>
                     </p>
                </li>
			    <!--<h3>新闻聚焦</h3>

				<div class="right1"><a href="/hzauygjy/index.php/Home/Index/news1.html">甘孜藏区行</a><img src="/hzauygjy/Public/Front/images/news21.jpg"></div>
				<div class="right2"><a href="">校园爱心义卖</a><img src="/hzauygjy/Public/Front/images/news3.jpg"></div>
				<div class="right3"><a href="">外校交流</a><img src="/hzauygjy/Public/Front/images/news1.jpg"></div>
				<div class="right4"><a href="">阳光小屋</a><img src="/hzauygjy/Public/Front/images/news4.jpg"></div>
				<div class="right5"><p>-------------------------------------------------------------</p><a href="">>>更多</a></div>-->
			</div>
		</div>
	</div>
	<!--尾部-->
    <div id="footer">
	<div class="footer2"><p>版权所有:华中农业大学阳光家园公益组织&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：刘xx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEL:159xxxxxxxx</p></div>
	<div class="footer3"><p>技术支持：@华中农业大学沸点工作室</p></div>
</div>
</body>
</html>