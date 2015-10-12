<?php
	@session_start();
	ini_set('expose_php', "Off");
	include "db_con.inc.php";
	include "libs/db_funs.inc.php";
	include "functions.inc.php";
	include "libs/class.phpmailer.php";
	include "libs/paging.php";
	include "ddl.inc.php";
        /*********** SET CHARACTER SET *********************/
        Query("SET NAMES 'utf8'");
        header('Content-Type: text/html; charset=utf-8');
	/***************************************************/
        sanitizeInputs();
        //define("MEDIA_UPLOAD_PATH", "/uploads/");
        define("ADMIN_PATH", "http://". $_SERVER['HTTP_HOST'] ."/admin/");
        define("DB_TABLE_PREFIX", "");        
	define("CURRENCY_SYMBOL", "SGD");
	date_default_timezone_set("Asia/Singapore");
        
        define("PAYPAL_CURRENCY_CODE", "SGD");
	define("PAYPAL_EMAIL_ADDRESS", "sales@besttours.com.sg");
	define("ORDER_SALT", "singapur1234");
	define("PAYPAL_LOG_FILE", "paypal.html");
	define("PAYPAL_LIVE", true);
	
        
        
        if(!defined('DOMAIN_URL'))
		define("DOMAIN_URL", $DomainName);
	
	define("TEE_DATE", "F j, Y l");
	define("DB_TEE_DATE", "%M %m, %d %W");
	define("TEE_
	
	", "g:i a");
	define("TEE_DATETIME", "j, Y l g:i a");
	define("DB_DATE", "Y-m-d");
	define("DB_DATETIME", "Y-m-d g:i a");

	if($_SERVER['HTTP_HOST'] == 'localhost')
		define("GMAP_KEY", "ABQIAAAAiU5izPKacR1UtGbAC2YBLxT4igCDZJ37K7N0SFAvv2oY__M2gBQqaXEIJQzuEOtu6MsGSV7hTsEaSQ");
	else if($_SERVER['HTTP_HOST'] == '')
		define("GMAP_KEY", "ABQIAAAAiU5izPKacR1UtGbAC2YBLxR3k-nYNSXLA-DYQJ6Llc3zSYJ7oRQmfF2n3WvW4_5yXuo-OYRmk4W-Pw");
	else
		define("GMAP_KEY", "ABQIAAAAiU5izPKacR1UtGbAC2YBLxRm7Isf4cbz72eWTGTNE0QShSCFmRRcHM-5a7caWBt12i89pkSTHPd46A");

	

/*************** PHP SELF in Session *******************************/

	preg_match("/([^\/]+\.\w{1,})$/",$_SERVER['PHP_SELF'],$arMatches);	
	//echo $arMatches[1];
	$_SESSION['PHP_SELF'] = $arMatches[1];
	//echo $_SESSION['PHP_SELF'];
	if(isset($_SERVER['HTTP_REFERER']))
	{
		$url = explode('?',$_SERVER['HTTP_REFERER']);		
		preg_match("/([^\/]+\.\w{1,})$/",$url[0],$arMatches);	
		$_SESSION['HTTP_REFERER'] = @$arMatches[1];
	}
	else
		$_SESSION['HTTP_REFERER'] = '';

//print($_SERVER['HTTP_REFERER'].'='.$_SESSION['HTTP_REFERER']);
// expiration of errors

if(isset($_SESSION['ERROR_QUEUE']))
{
	$refs = array_keys($_SESSION['ERROR_QUEUE']);
	foreach($refs as $ref)
	{
		$_SESSION['ERROR_QUEUE'][$ref]['expiration']++;
		
		if($_SESSION['ERROR_QUEUE'][$ref]['expiration']>=5)
			unset($_SESSION['ERROR_QUEUE'][$ref]);
	}
}
/************************************************************************/
// remove this after handle login
$_SESSION['ADMIN_USER_ID'] = 1;
?>