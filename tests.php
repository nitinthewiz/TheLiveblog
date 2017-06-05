<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$configs = include('configs.php');
	echo $configs->userName, "\n";
	echo gettype($configs->userName);

//		'userName'
//	'siteUrl'
//	'siteTitle'
//	'siteDescription'
//	'password'
//	'twitterName'
//	'twAPIkey'
//	'twAPIsecret'
//	'twUserKey'
//	'twUserSecret'
//	'timezone'
//	'knownSite'
//	'knownUser'
//	'knownAPIkey'
//	'knownTwName'
//	'tenCauthtoken'

?>