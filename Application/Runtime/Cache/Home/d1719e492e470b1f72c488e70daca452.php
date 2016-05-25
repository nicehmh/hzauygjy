<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>阳光家园</title>
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/header.css">
	<link rel="stylesheet" href="/hzauygjy/Public/Front/css/applay.css">
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
	<div class="nav"><p>首页>>在线报名</p></div>
		<div class="content">
			<form action="/hzauygjy/index.php/Home/Index/record" id="form1" name="form1" method="post" enctype="multipart/form-data">
				 
				  <table border="1" cellspacing="0" border-color="#666">
				   <h3 style="text-align:center;margin-bottom:5px;">志愿者申请报名表</h3>
					<tr>
						<td>姓名</td><td><input type="text" name=""></td>
						<td>性别</td><td>男 <input type="radio" name="sex" value="男">　女 <input type="radio" name="sex" value="女"></td>
						<td rowspan="3" class="photo">
							照片
							<div id="preview">
				   				 <img id="imghead" border=0 src="/hzauygjy/Public/Front/images/logo2.png" width="90" height="90" />
							</div>
							<input type="hidden" name="" value="">
							<input type="file" onchange="previewImage(this)" class="file"  name="filename" id="img"/>
						</td>
					</tr>
					<tr>
						<td>出生年月</td><td><input type="text" name="birth"></td>
						<td>工作国家或地区</td><td><input type="text" name="area"></td>
					</tr>
					<tr>
						<td>证件名称</td>
						<td>
							<select name="card" id="card">
								<option value=""></option>
								<option value="身份证">身份证　　　　　 　</option>
								<option value="护照">护照　　　　　 </option>
								<option value="其他">其他　　　　　</option>
							</select>
						</td>
						<td>证件号码</td><td><input type="text" name="cardid"></td>
					</tr>
					<tr>
						<td>E-mail</td><td><input type="text" name="email"></td>
						<td>职务</td><td colspan="2"><input type="text" name="job"style="width:400px;"></td>
						
					</tr>
					<tr>
						<td>电话</td><td colspan="2"><input type="text" name="tel" style="float:left;width:300px;"></td>
						
						<td>专业领域</td>
						<td>
						
						</td>
					</tr>
					<tr>
						<td>通讯地址</td><td colspan="6"><input type="text" name="address" style="float:left;width:770px;"></td>
					</tr>
				  </table>
				  <span><input type="submit" class="denglu one" value="提交"/></span>
				  	  <h2><input type="submit" value="附件" style="margin-left:50px;"></h2>
			</form>
		</div>
	</div>
	<!--尾部-->
    <div id="footer">
	<div class="footer2"><p>版权所有:华中农业大学阳光家园公益组织&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;联系人：刘xx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TEL:159xxxxxxxx</p></div>
	<div class="footer3"><p>技术支持：@华中农业大学沸点工作室</p></div>
</div>
</body>
</html>