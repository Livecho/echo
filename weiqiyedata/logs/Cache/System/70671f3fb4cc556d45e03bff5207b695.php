<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台首页</title>
<link href="<?php echo RES;?>/images/main.css" type="text/css" rel="stylesheet">
<meta http-equiv="x-ua-compatible" content="ie=7" />
<script src="<?php echo STATICS;?>/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="<?php echo RES;?>/js/frame.js" type=text/javascript></script>
<script type="text/javascript" src="<?php echo STATICS;?>/artDialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="<?php echo STATICS;?>/artDialog/plugins/iframeTools.js"></script>
</head>
<body style="background:none" bgColor="transparent">
<div class="content">
<div class="box">
	<h3><?php echo C('site_name');?>网络更新消息</h3>
    <div class="con dcon">
    <div class="update">
    <p>服务器环境：[<?php echo PHP_OS; ?>]<?php echo $_SERVER[SERVER_SOFTWARE];?> MySql:<?php echo mysql_get_server_info(); ?> php:<?php echo PHP_VERSION; ?></p>
    <p>服务器IP：<?php echo $_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT']; ?></p>
    <p>当前网站语言：<?php echo getenv("HTTP_ACCEPT_LANGUAGE"); ?></p>
    <p>被屏蔽的函数：<?php echo get_cfg_var("disable_functions")?get_cfg_var("disable_functions"):"无" ; ?></p>
   
    </div>
    <ul class="myinfo">
   <li><p class="red">您的程序版本为：weiqiye多用户微信营销系统</p><span>[ 授权版本：商业版 (终身使用权) ]</span></li>
   <li><p class="red">您的程序版本为：weiqiye多用户微信营销系统</p><span>[ 授权版本：商业版 (终身免费) ]</span></li>
  
	</ul>
    </div>
</div>
<!--/box-->
<div class="box">
	<h3>weiqiye官方动态</h3>
    <div class="con dcon">
    <div class="kjnav">
    <a href="http://weiqiye.taobao.com/" target="_blank">使用帮助</a><a href="http://weiqiye.taobao.com/" target="_blank">技术售后</a><a href="http://weiqiye.taobao.com/" target="_blank">安装指导</a>
	<a href="http://weiqiye.taobao.com/" target="_blank">联系我们</a>
	<a href="http://weiqiye.taobao.com/" target="_blank">升级咨询</a>
    </div>
    <ul class="myinfo kjinfo">
   <li class="title">售后服务</li>

<li>客服QQ：1069514559</li>
	</ul>
    </div>
</div>

<!--/box-->
</div>
</body>
</html>