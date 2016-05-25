<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>阳光家园</title>
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/header.css">
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/member.css">
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
	<div class="nav"><p>首页>>成员介绍</p></div>
		<div class="content">
			<tr>
			   <?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td>
					<div class="member_pt">
						<img src="/hzauygjy/Public/upload/<?php echo ($vo["img"]); ?>">
						<div class="member_p">
						<p><?php echo ($vo["name"]); ?><br><?php echo ($vo["job"]); ?><br><?php echo ($vo["tel"]); ?></p>
						</div>
					</div>
				</td><?php endforeach; endif; else: echo "" ;endif; ?>
			</tr>
		</div>
	</div>
	<!--尾部-->
    <div id="footer">
	<div class="footer2"><p>版权所有:华中农业大学阳光家园公益组织&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：刘xx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEL:159xxxxxxxx</p></div>
	<div class="footer3"><p>技术支持：@华中农业大学沸点工作室</p></div>
</div>
</body>
</html>