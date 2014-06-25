<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>立即注册 - <?php echo C('site_name');?>微信接口_微信公众管理平台</title>
<meta name="keywords" content="<?php echo C('site_name');?>微信营销,微信接口,微信机器人,微信助手,微信营销,微信第三方接口,微信公众账号"/>
<meta name="description" content="<?php echo C('site_name');?>微信营销提供最好用、最方便的微信接口，微信会员卡、微信喜帖、优惠券、大转盘、团购、一战到底、微网站、微相册、在线预订，一应俱全。让你运营微信得心应手!"/>
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
 <div class="main1000">
   <div class="bg50"></div>
   <form action="<?php echo U('Users/checkreg');?>" enctype="multipart/form-data"  onsubmit="return onpost()" id="registerform" name="register" autocomplete="off" method="post">

			<input name="step" value="2" type="hidden"/>
			<input name="invite" value="" type="hidden"/>
   <div class="reg_index">
    <p>
        <label>用户名</label>
        <input  id="username"  name="username" type="text" />
        <span id="err_username"><font color="#FF0000">*</font>长度为6~16位字符，可以为"数字/字母/中划线/下划线"组成</span>
      </p>
       <p>
        <label>设置密码</label>
        <input  id="password" name="password"  type="password" />
        <span id="err_password"><font color="#FF0000">*</font>长度为6~16位字符</span>
      </p>
       <p>
        <label>确认密码</label>
        <input id="repassword"  name="repassword"  type="password" />
        <span id="err_repassword"></span>
      </p>      
       <p>
        <label>邮箱</label>
        <input name="email" id="registeremail" type="text" />
        <span id="err_registeremail"><font color="#FF0000">*</font>邮箱将与支付及优惠相关，请填写正确的邮箱</span>
      </p>
       <p>
        <label>QQ</label>
        <input  name="qq" id="registerqq" type="text" />
        <span id="err_registerqq"><font color="#FF0000">*</font>请输入QQ号，以便我们联系</span>
      </p>
	   <p>
        <label>手机</label>
        <input  name="tel" id="registertel" type="text" />
        <span></span>
      </p>
     <!--  <p>
        <label>验证码</label>
        <input name="" type="text" />
        <span></span>
      </p>-->
      <input name="sendphone" type="submit" value="" class="reg_tj"/>
   </div>
   </form>

 </div>
</div>
<script type="text/javascript">
	function onpost() {
        var username = max.$("username");
		var password = max.$("password");
		var repassword = max.$("repassword");
		var registeremail = max.$("registeremail");
		var registerqq = max.$("registerqq");
		if(username.value == "") {
			max.$("err_username").innerHTML = "<font color='#FF0000'>*请输入用户名</font>";
			return false;
        }
        if (password.value == "" ){
			max.$("err_password").innerHTML = "<font color='#FF0000'>*请输入密码</font>";
			return false;
		}
		if(repassword.value == "") {
			max.$("err_repassword").innerHTML = "<font color='#FF0000'>*请再次输入密码</font>";
			return false;
        }
		if(repassword.value != password.value) {
			max.$("err_repassword").innerHTML = "<font color='#FF0000'>*2次输入的密码不一致</font>";
			return false;
        }
        if (registeremail.value == "" ){
			max.$("err_registeremail").innerHTML = "<font color='#FF0000'>*请输入邮箱</font>";
			return false;
		}
		 if (registerqq.value == "" ){
			max.$("err_registerqq").innerHTML = "<font color='#FF0000'>*请输入qq</font>";
			return false;
		}
        return true;
    }
</script>
</body>
</html>