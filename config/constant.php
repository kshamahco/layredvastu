<?php
if((isset($_GET['gclid']) && $_GET['gclid']!='')){
    $clickId = $_GET['gclid'];
}else if((isset($_GET['wbraid']) && $_GET['wbraid']!='')){
    $clickId = $_GET['wbraid'];
}else{
    $clickId = '';
}


if((isset($_GET['utm_source']) && $_GET['utm_source']!='') || (isset($_GET['utm_medium']) && $_GET['utm_medium']!='')){
	$utm = $_GET['utm_source'].'utmedium'.$_GET['utm_medium'].'clickId'.$clickId.'ipaddress'.$_SERVER['REMOTE_ADDR'];
	$adId = 'exist';
}else if((isset($_GET['fbclid']) && $_GET['fbclid']!='')){
	$utm = 'Facebookutmedium--'.'clickId'.$clickId.'ipaddress'.$_SERVER['REMOTE_ADDR'];
	$adId = 'exist';
}else{
	$utm = 'ipaddress'.$_SERVER['REMOTE_ADDR'];
	$adId = 'not_exist';
}

$ip = $_SERVER['REMOTE_ADDR'];
@header('Content-type: text/html; charset=utf-8');
@header('Cache-Control: no-store, private, no-cache, must-revalidate');
@header('Cache-Control: pre-check=0, post-check=0, max-age=0, max-stale = 0', false);
@header('Pragma: public');
@header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
@header('Expires: 0', false);
@header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
@header('Pragma: no-cache');
define('ROOT_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/current/layeredvastu.com/');
define('_BASEURL_', 'http://' . $_SERVER['HTTP_HOST'] . '/current/layeredvastu.com/');
define('SITE_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/current/layeredvastu.com/');
define('CDN_PATH', 'http://' . $_SERVER['HTTP_HOST'] . '/current/layeredvastu.com/');
define('DOCUMENT_PATH', $_SERVER['DOCUMENT_ROOT']);
define('CSS_PATH', ROOT_PATH . 'css/');
define('BOOT_CSS_PATH', ROOT_PATH . '/css/boot/');
define('JS_PATH', ROOT_PATH . 'js/');
define('BOOT_JS_PATH', ROOT_PATH . '/js/boot/');
define('IMG_PATH', ROOT_PATH . 'img/');
define('IMAGE_PATH', ROOT_PATH . 'images/');
define('ALBUM_PATH', ROOT_PATH . '/uploadfiles/');
define('GLOBAL_PATH', ROOT_PATH . '/');
define('LOG_OUT_PATH', ROOT_PATH . '/');
define('DOCUMENT_PATH_UPLOAD', DOCUMENT_PATH . '/');
define('client_ip', $ip);
//echo ROOT_PATH;die;
define('utm_source',$utm);
define('adId', $adId);
@date_default_timezone_set("Asia/Kolkata");
