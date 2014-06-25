<?php
header("Content-type: text/html; charset=utf-8");
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value){
		$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value); 
		return $value; 
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE); 
}
if(!file_exists("./install/lock")){
	header("Location:/install");
}
define('APP_DEBUG',true);
define('CONF_PATH','./weiqiyedata/Conf/');
define('RUNTIME_PATH','./weiqiyedata/logs/');
define('TMPL_PATH','./tpl/');
define('HTML_PATH','./weiqiyedata/html/');

define('APP_PATH','./weiqiye/');
define('CORE','./weiqiye/_Core');
require(CORE.'/weiqiye.php');
?>