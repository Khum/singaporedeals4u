<?php
	@session_start();
	include("../inc/db_con.inc.php");
	include("../inc/libs/PHPLiveX.php");
	include("../inc/libs/db_funs.inc.php");
	include("../inc/functions.inc.php");
	include("../inc/ezlinks_functions.inc.php");
	include("../inc/fore_functions.inc.php");
	include "../inc/libs/class.phpmailer.php";
	include "../inc/libs/paging.php";
	include "../inc/ddl.inc.php";
	sanitizeInputs();	
	define("ADVERTISING_IMAGES_PATH", rtrim(getcwd(), "app-admin golfcourse-admin") ."/images/advertising_images/");
	define("GOLFCOURSE_IMAGES_PATH", rtrim(getcwd(), "app-admin golfcourse-admin") ."/images/golfcourse_images/");
	define("GOLFCOURSE_ADMIN_PATH", "http://". $_SERVER['HTTP_HOST'] ."/golfcourse/golfcourse-admin/"); // http://demo.hashe.com/golfcourse/golfcourse-admin/
	define("ADMIN_PATH", "http://". $_SERVER['HTTP_HOST'] ."/golfcourse/app-admin/"); // http://demo.hashe.com/golfcourse/app-admin/
	define("SITE_ROOT", "http://". $_SERVER['HTTP_HOST'] ."/golfcourse/"); // http://demo.hashe.com/golfcourse/
	define("BUSINESS_HOURS_START", "8");
	define("BUSINESS_HOURS_END", "18");
	define("HOURS_MINUTES_SLOT", "15");
	define("CURRENCY_SYMBOL", "$");
	if(!defined('DOMAIN_URL'))
		define("DOMAIN_URL", $DomainName);
	define("PARTICIPANT_PER_TIME_SLOT", "4");

	define("DATE_LONG_FORMAT", "F j, Y l");

?>