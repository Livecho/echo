<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C('site_name');?>-weiqiye后台管理系统</title>
<link href="<?php echo RES;?>/wqyimg/style.css" type="text/css" rel="stylesheet" />
<script LANGUAGE="Javascript">
　　<!-- 导航双重跳转
　　function adClick(site1, site2) {
		if(site1=="0"){
			window.parent.document.getElementById("frmset").cols="0,*";
		}else{
			window.parent.document.getElementById("frmset").cols="168,*";
　 　		window.open(site1,"left");
		}
　　}
　　//  End -->
</script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="72" align="left" valign="top" class="head">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="6" height="72" valign="top" background="/tpl/System/common/wqyimg/images/nav_lfbg.jpg">&nbsp;</td>
        <td valign="top" style="background:url(/tpl/System/common/wqyimg/images/nav_midbg.jpg) repeat-x;">
        	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="250" align="left" valign="top" style="background:url(/tpl/System/common/wqyimg/images/head_bg.jpg) repeat-x;"><a href="index.php?g=System&m=System&a=index" target="framese"><img src="/tpl/System/common/wqyimg/images/logo.png" width="250" height="70" /></a></td>
              <td align="left" valign="top" style="background:url(/tpl/System/common/wqyimg/images/head_bg1.jpg) no-repeat;">
              	<div class="navigation">
                	<ul>
					<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nav_val): $mod = ($i % 2 );++$i;?><li class="nav" onMouseOver="this.className='nava'" onMouseOut="this.className='nav'">

			<a href="#" onClick="adClick('<?php echo U('System/menu',array('pid'=>$nav_val['id'],'level'=>2,'title'=>rawurlencode ($nav_val['title'])));?>',<?php echo ($nav_val['id']); ?>);"><?php echo ($nav_val['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		
                    </ul>
                </div>              </td>
				 <td align="left" valign="top"><div class="weiz2">
                	<ul>
						<li class="sy"><a href="<?php echo U('Admin/logout');?>" target="_parent">[退出]</a></li>
						<li class="sy"><a href="/index.php?g=User&m=Index&a=index" target="_blank">用户中心</a></li>
						<li class="sy"><a href="/index.php" target="_blank">访问首页</a></li>
                    	<li class="tc">您好：<b><?php echo (session('username')); ?></b> ，欢迎使用<?php echo C('site_name');?>微信！</li>
                      	
                    </ul>
                </div></td>
            </tr>
          </table>
		</td>
        <td width="6" valign="top" background="/tpl/System/common/wqyimg/images/nav_rtbg.jpg"></td>
      </tr>
      <tr>
        <td height="5" valign="top" bgcolor="#FFFFFF"></td>
        <td valign="top" bgcolor="#FFFFFF"></td>
        <td valign="top" bgcolor="#FFFFFF"></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>