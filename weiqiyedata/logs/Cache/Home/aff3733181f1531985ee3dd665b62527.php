<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="<?php echo RES;?>/js/html5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/weimob-index.js"></script>
<script src="<?php echo RES;?>/js/html5.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js"></script>
    <title><?php echo C('site_name');?>,微信公众平台,微信机器人,微信自动回复, 多用户微信营销系统,  </title>
    <meta name="keywords" content="<?php echo C('keyword');?>">
    <meta name="description" content="<?php echo C('content');?>">
    <link href="<?php echo RES;?>/css/base.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo RES;?>/js/jquery.cityselect.js"></script>
    <script type="text/javascript" src="<?php echo RES;?>/js/HeaderMenu.js"></script>
    <link href="<?php echo RES;?>/css/HaedMenu.css" type="text/css" rel="stylesheet">
    <link href="<?php echo RES;?>/css/notification.css" rel="stylesheet" type="text/css">
    <script src="<?php echo RES;?>/js/jquery.cookie.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo RES;?>/js/jfade.js"></script>
     <script type="text/javascript" src="<?php echo RES;?>/js/images.js"></script>  
     <script type="text/javascript" src="<?php echo RES;?>/js/jquery.SuperSlide.2.1.js"></script>  
    <script type="text/javascript">
      $(function(){
	$.fn.imgVAlign=function(){
				return $(this).each(function(i){
					//获取图片的src值，并定义给变量bg
					var bg = $(this).attr("src");
					//给图片的父元素定义背景图片的样式，并且背景图片
					$(this).parent().parent().parent().css({"background": "url("+ bg +") no-repeat top center"
					});
					//将图片隐藏
					$(this).css("display","none");
				});
			}
			//调用上面写的插件
			$(document).ready(function(){
				$(".slideCon img").imgVAlign();
	});		
	
})
    </script>
<style type="text/css">
/* 首页幻灯片 */
.fullSlide{position:relative;width:100%;height:555px; z-index:1}
.fullSlide .bd{position:relative;z-index:0;overflow:hidden;margin:0 auto}
.fullSlide .bd ul{width:100% !important}
.fullSlide .bd li{overflow:hidden;width:100% !important;height:555px;text-align:center; display:none}
.fullSlide .bd li a{display:block;height:555px; text-indent: -999em; overflow:hidden;*zoom:1}
.fullSlide .hd{position:absolute;bottom:0;left:0;z-index:1;width:100%;height:34px;text-align:center;line-height:34px;}
.fullSlide .hd ul{padding-top:5px;text-align:center}
.fullSlide .hd ul li{display:inline-block;overflow:hidden;margin:2px 5px;width:16px;height:16px; line-height:16px; text-indent:-9999em; background:url(img/bg_sideBtn.png) 0 -18px;cursor:pointer;zoom:1;*display:inline}
.fullSlide .hd ul li.on{background-position:0 0; color:#fff;}
.slideCon{width:980px; margin:auto; height:555px}
</style>
</head>
<body id="w-body" class="w-login-bg">
    <div class="w-doc">
      
	    <div class="w-top">
            <div class="w-head">
                
                <div class="w-wrap">
                    <a class="w-left" href="#"><img src="<?php echo C('logo');?>"   ></a>
                    <div class="w-head-line w-left">
                    </div>
                    <div class="w-left">
                        <div class="w-city-select">
                           
                        </div>
                            <div class="w-head-login">
                                <a href="<?php echo U('Index/login');?>" class="">登录</a>&nbsp;｜&nbsp;<a href="<?php echo U('Index/reg');?>" class="">注册</a></div>
                    </div>
                    <ul class="w-menu Menu">
                        <li><a href="/" class="hover">首页</a></li>
						<li><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
					    <li><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
						<li><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
						<li><a href="<?php echo U('Home/Index/guide');?>">案例展示</a></li>
						<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>">登录后台</a></li>
				<li><a href="<?php echo U('Index/reg');?>" class="hover">创建一个帐号</a></li>
					<?php else: ?>
                <li><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
				<li><a href="/#" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')" >退出</a></li><?php endif; ?>	
                    </ul>
                </div>
            </div>
        </div>
		
		
        <div class="w-topspace">
        </div>
     


   <!--banner,start -->
    <div class="fullSlide ovh">
             <div class="bd ovh">
                <ul>
                   
                    <li><div class="slideCon ovh"><a href="/index.php?m=Index&a=reg" ><img src="img/banner/02.jpg" /></a></div></li>
					 <li><div class="slideCon ovh"><a href="/index.php?m=Index&a=reg" ><img src="img/banner/01.jpg" /></a></div></li>
                    <li><div class="slideCon ovh"><a href="/index.php?m=Index&a=reg" ><img src="img/banner/03.jpg" /></a></div></li>
                    <li><div class="slideCon ovh"><a href="/index.php?m=Index&a=reg" ><img src="img/banner/04.jpg" /></a></div></li>    
                    <li><div class="slideCon ovh"><a href="/index.php?m=Index&a=reg" ><img src="img/banner/05.jpg" /></a></div></li>
                    <li><div class="slideCon ovh"><a href="/index.php?m=Index&a=reg" ><img src="img/banner/06.jpg" /></a></div></li>  
                </ul>
            </div>
            <div class="hd">
                <ul>
                </ul>
            </div>
    	</div>
	<!--banner,end -->
<script type="text/javascript" src="<?php echo RES;?>/js/indexJs.js"></script>  
    <!--case,start -->
    <div class="w-case">
    	<div class="w-wrap" style="overflow:hidden;">
            <div class="picnews">
        <dl class="tbox light">
            <dd class="light">
                <div class="infiniteCarousel">
                    <div class="wrapper" style="overflow: hidden; ">
                        <ul style="width: 9999px; ">
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase13.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case13-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase13.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase14.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case14-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase14.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase15.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case15-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase15.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase16.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case16-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase16.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase1.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case1-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase1.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase2.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case2-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase2.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase3.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case3-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase3.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase4.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case4-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase4.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase5.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case5-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase5.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase6.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case6-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase6.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase7.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case7-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase7.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase8.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case8-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase8.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase9.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case9-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase9.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase10.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case10-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase10.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase11.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case11-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase11.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase12.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case12-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase12.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase13.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case13-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase13.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase14.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case14-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase14.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase15.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case15-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase15.jpg&#39;"></li>
                           <li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase16.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case16-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase16.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase1.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case1-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase1.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase2.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case2-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase2.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase3.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case3-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase3.jpg&#39;"></li><li style="background:url(http://static.wydapp.com/images/case-shadow.jpg) center bottom no-repeat;" class="cloned"><img style="border:1px solid #dcdcdc;border-bottom:none;padding:1px;margin:0;" src="<?php echo RES;?>/images/vcase4.jpg" onmouseover="this.src=&#39;http://static.wydapp.com/images/case4-cord.jpg&#39;;" onmouseout="this.src=&#39;http://static.wydapp.com/images/vcase4.jpg&#39;"></li>
                       </ul>

        </div>	<a class="w-prev" style="top: 55%;"></a><a class="w-next" style="top: 55%;"></a>

    </div>
    </dd>
    </dl>
    </div>
    </div>
    </div>
    <!--case,end -->
    
    <!--function, start -->
    <div class="w-function">
    	<div class="w-wrap">
            <ul class="w-function-wrap">
                <li class="w-function-border">
                	<div class="w-new"></div>
                    <a title="全网首发四网合一的超级商城系统" href="#">
                        <div class="w-function-mall"></div>
                        <h3>超级商城</h3>
                        <p>小微信，大商城</p><p>四网合一的超级商城系统</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                	<div class="w-new"></div>
                    <a title="微信加粉，广告宣传利器" href="#">
                        <div class="w-function-wifi"></div>
                         <h3>智能WIFI</h3>
                        <p>关注公众号,享受wifi服务</p><p>微信加粉，广告宣传利器</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                	<div class="w-new"></div>
                    <a title="微信订餐，会员充值，一键搞定" href="#">
                        <div class="w-function-dc"></div>
                          <h3>微订餐</h3>
                        <p>微信订餐，一键搞定</p></a><p><a title="微信订餐，会员充值，一键搞定" href="#">
                    </a>
                </p></li>
                
                <li class="w-function-border">
                	<div class="w-new"></div>
                    <a title="现场互动，互动加粉，互动新体验" href="#">
                        <div class="w-function-hd"></div>
                         <h3>微互动</h3>
                        <p>现场互动，互动加粉</p><p>活跃气氛，让粉丝涨起来</p>
                    </a>
                </li>
                       <li class="w-function-border">
                	<div class="w-new"></div>
                    <a title="聚集人气 + 品牌宣传的首选" href="#">
                        <div class="w-function-wzd"></div>
                        <h3>微终端</h3>
                        <p>微信打印，广告展示</p><p>聚集人气+品牌宣传的首选</p>
                    </a>
                </li>
              
                  <li class="w-function-border">
                  <a href="#">
                   <div class="w-function-cy"></div>
                        <h3>微餐饮</h3>
                        <p>饭店展示，客户订餐</p><p>适合餐饮行业的平台方案</p>
                    </a>
                </li>
                  <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-xf"></div>
                        <h3>微婚庆</h3>
                        <p>微婚庆</p><p>婚庆公司客户平台搭建方案</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                        <div class="w-function-yl"></div>
                        <h3>微娱乐</h3>
                        <p>在线预约，促销活动</p><p>娱乐行业用户首选</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                      <div class="w-function-xx"></div>
                        <h3>微休闲</h3>
                        <p>店面展示，会员管理</p><p>休闲养生行业营销利器</p>
                    </a>
                </li>
                 <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-jd"></div>
                        <h3>微酒店</h3>
                        <p>微信订房，房型展示</p><p>酒店营销新途径</p>
                    </a>
                </li>
                <li class="w-function-border">
                <a href="#">
                   <div class="w-function-yil"></div>
                        <h3>微医疗</h3>
                        <p>在线咨询，在线预约</p><p>医疗行业微信展示平台</p>
                    </a>
                </li>

                <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-sy"></div>
                        <h3>微摄影</h3>
                        <p>相册展示，预订摄影</p><p>摄影，婚庆行业营销利器</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                       <div class="w-function-ly"></div>
                        <h3>微旅游</h3>
                        <p>在线订房，景点展示</p><p>旅游行业微信营销方案</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                          <div class="w-function-qy"></div>
                        <h3><?php echo C('site_name');?></h3>
                        <p>企业展示，新闻中心</p><p>多种模板，适合各类企业</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-qc"></div>
                        <h3>微汽车</h3>
                        <p>在线试驾，车型展示</p><p>汽车,4S店微信营销平台</p>
                    </a>
                </li>
                
               
                <li class="w-function-border">
                    <a href="#">
                          <div class="w-function-jy"></div>
                        <h3>微教育</h3>
                        <p>课程设置，师资展示</p><p>教育行业微信宣传平台</p>
                    </a>
                </li>
                
              
                
                <li class="w-function-border">
                    <a href="#">
                          <div class="w-function-jc"></div>
                        <h3>微建材</h3>
                        <p>行业资讯，特价展示</p><p>建材行业营销新渠道</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                     <div class="w-function-xz"></div>
                        <h3>微行政</h3>
                        <p>政务公开，形象展示</p><p>行政机关沟通新手段</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                       <div class="w-function-jr"></div>
                        <h3>微金融</h3>
                        <p>手机银行，金融资讯</p><p>金融行业微信营销平台</p>
                    </a>
                </li>
                <li class="w-function-border">
                    <a href="#">
                      <div class="w-function-fc"></div>
                        <h3>微房产</h3>
                        <p>微信看房，楼盘介绍</p><p>房地产行业宣传平台</p>
                    </a>
                </li>
                 <li class="w-function-border">
                 <a href="#"> 
                      <div class="w-function-ty"></div>
                        <h3>微通用</h3>
                        <p>超多模板，轻松搭建</p><p>适合大部分客户的通用平台</p>
                    </a>
                </li>
                <li class="w-function-border">
                  <a href="#"> 
                  <div class="w-function-jqr"></div>
                        <h3>智能机器人</h3>
                        <p>便民服务</p><p>关键词自动回复</p>
                    </a>
                </li>
                
            
                
                <li class="w-function-border">
                   <a href="#"> 
                        <div class="w-function-ggl"></div>
                        <h3>刮刮乐活动</h3>
                        <p>开展在线刮奖活动</p><p>吸引顾客线下消费</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                <a href="#">
                    <div class="w-function-zp"></div>
                        <h3>幸运大转盘</h3>
                        <p>快乐大转盘</p><p>幸运落谁家</p>
                    </a>
                </li>
                <li class="w-function-border">
                    <a href="#"> 
                        <div class="w-function-yhq"></div>
                        <h3>优惠券活动</h3>
                        <p>优惠电子券</p>
                        <p>方便快捷，微信营销必备</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                        <div class="w-function-tp"></div>
                        <h3>投票活动</h3>
                        <p>电子投票</p>
                        <p>带给粉丝不一样的感受</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                     <a href="#">
                         <div class="w-function-lbs"></div>
                        <h3>LBS回复</h3>
                        <p>LBS定位回复</p>
                        <p>商家营销新选择</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                        <div class="w-function-lyjl"></div>
                        <h3>留言记录功能</h3>
                        <p>客户意见，需求</p>
                        <p>均可即时知道</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                  <a href="#">
                        <div class="w-function-xc"></div>
                        <h3>相册功能</h3>
                        <p>开启相册功能,就可得到一个精美的相册网站</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                        <div class="w-function-zdy"></div>
                        <h3>自定义订单</h3>
                        <p>在线预约，在线报名</p>
                        <p>各种预约一键搞定</p>
                    </a>
                </li>
                
           
                <li class="w-function-border">
                    <a href="#">
                      <div class="w-function-tj"></div>
                        <h3>微统计</h3>
                        <p>粉丝关注，用户请求</p>
                        <p>实时统计，精确分析</p>
                    </a>
                </li>
                
                <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-tg"></div>
                        <h3>微团购</h3>
                        <p>商家团购，秒杀活动</p>
                        <p>统统搬进微信里</p>
                    </a>
                </li>
                
                  <li class="w-function-border">
                    <a href="#">
                        <div class="w-function-hyk"></div>
                        <h3>微会员卡</h3>
                        <p>方便携带，积分管理</p>
                        <p>微信内植会员卡</p>
                    </a>
                </li>
                    <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-xt"></div>
                        <h3>微卡片</h3>
                        <p>电子喜贴，时尚大气</p>
                        <p>婚宴、会议邀请更具个性</p>
                    </a>
                </li>
        
                
                <li class="w-function-border">
                    <a href="#">
                         <div class="w-function-dy"></div>
                        <h3>微调研</h3>
                        <p>微信调研，便捷高效</p>
                        <p>让你的营销事半功倍</p>
                    </a>
                </li>
            <div class="clearfix"></div>
                

            </ul>
        </div>
    </div>
    <!--function, end -->
    
    <!--wmall, end -->
    <div class="w-wmall">
    	<div class="w-wrap">
        	<div class="w-left" style="position:relative; height:520px; width:580px;">
            	<div style=" position:absolute; top:50%; margin-top:-150px">
                    <h3>把您的商城开到每个人的手机里</h3>
                    <h4>微信商城系统——全国首发四网合一的超级商城系统</h4>
                    <div class="w-wmall-function"><img src="<?php echo RES;?>/images/mall-ico.png"></div>
                    <h4>微信 / 微商城 / B2C / APP</h4>
                    <div style="w-wall-btn-wrap"><a href="#" class="w-mall-btn" title="查看详情">查看详情</a>  <a href="#" class="w-mall-btn" title="查看演示" target="_blank">查看演示</a></div>
                </div>
            </div>
            <div class="w-right" style="position:relative; height:520px; width:420px;">
            	<div style=" position:relative; top:50%; margin-top:-220px; text-align:center">
            		<img src="<?php echo RES;?>/images/mall-imge.png">
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--wmall, end -->
 

           <!-- 在线客服 开始-->
    <script type="text/javascript">
        jQuery(function ($) {
            $("#BtnQQ").click(function () {
                if ($(this).attr("class").indexOf("online-hidden") > 0) {
                    $(".online-right").css("display", "none");
                    $("#WOSBtn_wx").css("width", "30px");
                    $(this).removeClass("online-hidden");
                    $(this).addClass("online-show");
                }
                else {
                    $(".online-right").css("display", "block");
                    $("#WOSBtn_wx").css("width", "126px");
                    $(this).removeClass("online-show");
                    $(this).addClass("online-hidden");
                }
            })

            $(".big_pic").hover(function () {
                $(this).children(".erwei").animate({ bottom: -60, opacity: 'show' }, 200);
            }, function () {
                $(this).children(".erwei").animate({ bottom: -50, opacity: 'hide' }, 200);
            }
	);
            var href = window.location.href.toLowerCase();
            $(".top_r a").each(function () {
                var currentUrl = $(this).attr("href").toLowerCase();
                if (href.indexOf(currentUrl) != -1 && currentUrl != "/") {
                    //                    alert(currentUrl);
                    $(".top_r a").removeClass("now");
                    $(this).addClass("now");
                    return false;
                }
            });


            var _windowScrollTop; //滚动条距离顶端距离
            var _windowWidth; //窗口宽度
            jQuery(window).scroll(actionEvent).resize(actionEvent);  //监听滚动条事件和窗口缩放事件

            //响应事件
            function actionEvent() {
                _windowScrollTop = jQuery(window).scrollTop(); //获取当前滚动条高度
                _windowWidth = jQuery(window).width(); //获取当前窗口宽度
                moveQQonline(); //移动面板
            }
            //移动面板
            function moveQQonline() {
                $("#WOSBtn_wx").stop().animate({
                    right: 1, top: _windowScrollTop + 125
                }, "normal");
            }
            jQuery(window).scroll();
        });

         
          
    </script>

    
    <div id="WOSBtn_wx" style="position: absolute; display: block; right: 1px; top: 125px; width: 126px; height: 500px; z-index: 1000; ">
	<div id="BtnQQ" class="online-left online-hidden"></div>
    <div class="online-right">
    	<a class="online_M online-tc" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank"></a>
  
        <ul class="online-phone">
            <li>
            <a href="#" >
            <div class="phone-name">客服1</div>
            <div class="phone-nub"><?php echo C('phone');?></div></a>
            </li>
            <li>
            <a href="#" >
            <div class="phone-name">客服2</div>
            <div class="phone-nub"><?php echo C('phone1');?></div></a>
            </li>  
             <li>
            <a href="#" >
            <div class="phone-name">客服3</div>
            <div class="phone-nub"><?php echo C('phone2');?></div></a>
            </li>  
        </ul>
      
       
    </div>
           
        </div>
          <!-- 在线客服 结束-->

                <!--------官方微信start----------->
   
      <!--------官方微信end----------->

     
    <!--底部,start -->
   
<!--QQ咨询-->

<div class="footer">
	<div class="footer-content clearfix">
		<div class="foot-menu">
			<p>
				<a href="<?php echo C('site_url');?>">首页</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">渠道代理</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">接口定制</a>&nbsp;|&nbsp;
				<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes" target="_blank">微信托管</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于<?php echo C('site_name');?></a>
				
			</p>
			<p>客服QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?></p>
		</div>
		<div class="copyright">
			Copyright © 2013-2015 <?php echo C('site_url');?>. All Rights Reserved <?php echo C('site_name');?>版权所有 <?php echo C('ipc');?>
		</div>
	</div>
</div>
</body>
</html>
    <!--底部,end -->

     
        <script src="<?php echo RES;?>/js/artDialog.min.js" type="text/javascript"></script>
        <script src="<?php echo RES;?>/js/artDialog.plugins.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jQuery(function ($) {
                $(".AddAttribute").click(function () {
                    $.get("/index/zhaoshangsub", function (content) {
                        dialog = art.dialog({ title: "招商加盟", content: content, lock: true });
                        $("#cityselect2").citySelect({
                            nodata: "none",
                            prov: "湖南",
                            required: true
                        });
                    });
                })
            })

            function sure() {
                $(".testsub").each(function () {
                    $(this).remove();
                })
                var result = true;
                $("#new_supplier_apply2 input[type=text]").each(function () {
                    if ($(this).val() == "" || $(this).val() == null) {
                        result = false;
                        $(this).after("<label  class=\"testsub\" style=\"color:red\">不能为空</label>");
                    }
                });
                if (result) {
                    jQuery.ajax({
                        type: "POST",
                        url: "/index/ApplyAgent",
                        data: "ContactName=" + jQuery("#ContactName").val() + "&City=" + jQuery("#City").val() + "&Provice=" + jQuery("#Provice").val() + "&PhoneNumber=" + jQuery("#PhoneNumber").val() + "&CompanyName=" + jQuery("#CompanyName").val() + "&number=1",
                        success: function (msg) {
                            if (dialog && dialog.close) {                 //关闭弹出窗口
                                dialog.close();
                            }
                            alert(msg);
                        }
                    });
                } else {
                    return false;
                }
            }
        </script>
        <!--申请体验end -->
    </div>


</body></html>