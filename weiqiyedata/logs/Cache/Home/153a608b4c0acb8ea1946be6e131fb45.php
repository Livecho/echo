<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>立即登录 - 微信接口_微信公众管理平台</title>
<meta name="keywords" content="微信营销,微信接口,微信机器人,微信助手,微信营销,微信第三方接口,微信公众账号"/>
<meta name="description" content="微信营销提供最好用、最方便的微信接口，微信会员卡、微信喜帖、优惠券、大转盘、团购、一战到底、微网站、微相册、在线预订，一应俱全。让你运营微信得心应手!"/>
<link href="<?php echo RES;?>/css/global.css" rel="stylesheet" type="text/css" />
<link href="<?php echo RES;?>/css/login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/cj-lib.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/validate.js?ver=2013.1.23"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/md5.js"></script>
</head>

<body>
<style>
.top1000{ width:1000px; margin:0 auto;}
.top_l{ padding-top:6px;}
</style>
<div class="main-content">
<div class="main1000"> <img class="phone" alt="phone" src="<?php echo RES;?>/images/phone.png" id="zll" style="top:120px;display: inline;">
    <p class="txt1"><img src="<?php echo RES;?>/images/login_huanyin.png" width="251" height="109" /></p>
    <form action="<?php echo U('Users/checklogin');?>" enctype="multipart/form-data"  onsubmit="return onpost()" id="registerform" name="register" autocomplete="off" method="post">
      <input name="step" value="2" type="hidden">
      <input name="invite" value="" type="hidden">
      <div class="login">
        <h2>用户登陆</h2>
        <p>
          <label>用户名</label>
          <input  name="username" id="idname"  type="text" />
        </p>
        <p>
          <label>密&nbsp;码</label>
          <input  name="password" id="password" type="password" />
        </p>
        <p class="pass-form-item">
          <input type="checkbox" checked="checked" class="pass-checkbox-input" name="memberPass" style="border:none;">
          <label class="" id="TANGRAM__PSP_1__memberPassLabel" for="TANGRAM__PSP_1__memberPass" style="  height: auto;line-height: 18px;width: auto; border:none; background:none;">记住我的登录状态</label>
        </p>
        <p class="pass-form-item">
		 <input type="checkbox" checked="checked" class="pass-checkbox-input" name="memberPass" style="border:none;">
          <input name="regsubmit" type="submit" value="" id="registerformsubmit"  class="login_input"/>
 <p class="reg_pic"><a href="<?php echo U('Home/Index/reg');?>"><img src="<?php echo RES;?>/images/reg.jpg" width="175" height="38" /></a></p>
      </div>
    </form>
    <div class="yinying"><img src="<?php echo RES;?>/images/login_yiyin.png" width="320" height="4" /></div>
    <div class="news">
      <div class="gr"></div>
      <ul>
        <li style=" width:545px;">
          <div class="w545">
            <div class="inner"> <a href="javascript:void(0)" class="d1"></a> </div>
            <div class="products-desc">
              <h3 class="title">什么是微信营销</h3>
              <div class="desc"> 微信营销是一个集微信公众接口、微信达人、微信资讯， <br>
                旨在通过方便实用的接口帮助微信营销用户管理提高个人和团队效率的管理产品。 <br>
                通过"微信导航"为微信玩家们更好的找到自己喜欢的微信。 </div>
            </div>
          </div>
        </li>
        <li>
          <div class="w545">
            <div class="inner"> <a href="javascript:void(0)" class="d2"></a> </div>
            <div class="products-desc">
              <h3 class="title">新版上线</h3>
              <div class="desc">提供[微信喜帖],[微信宣传页],[3G相册],[微信图片墙],[微信留言板],[自定义订单]……</div>
            </div>
          </div>
        </li>
        <li>
          <div class="w545">
            <div class="inner"> <a href="javascript:void(0)" class="d3"></a> </div>
            <div class="products-desc">
              <div class="w545">
                <h3 class="title">我们能为您做什么？</h3>
                <div class="desc"> 提供 超强小黄鸡陪聊+40多款便民功能，微会员（SCRM），微活动 <br>
                  微团购+刮刮乐+一战到底+微信喜帖+在线订餐+自定义订单+3G相册+优惠券+幸运大转盘的会员再营销，超炫微信3G网站，<br>
                  等您需要的各种微信营销模块。</div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="clear"></div>

</div>
<script type="text/javascript">
function onpost() {
	var pw = max.$("password");
	var idname = max.$("idname");
	if(idname.value == "") {
		alert("请输入用户名");
		return false;
	}
	if (pw.value == "" ){
		alert("请输入密码");
		return false;
	}	
	return true;
}
</script> 
<script>
$(function() {
	
    var $phone = $('.phone');
    var top = $phone.css('top');
    $phone.css({top: '-160px', display: 'inline'}).animate({top: top}, 2000, 'easeOutBounce') 
    $('.txt1').slideDown(2000);
	
	$(".d1").hover(
	 function(){
	   	 $(".d3").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d2").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d1").parent().parent().parent().animate({ width:'545px'},300)
	  }
	)
	$(".d2").hover(
	 function(){
	   	 $(".d1").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d3").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d2").parent().parent().parent().animate({ width:'545px'},300)
	  }
	)
	$(".d3").hover(
	 function(){
	   	 $(".d1").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d2").parent().parent().parent().animate({ width:'135px'},300)
		 $(".d3").parent().parent().parent().animate({ width:'545px'},300)
	  }
	)
	
});
</script>
</body>
</html>