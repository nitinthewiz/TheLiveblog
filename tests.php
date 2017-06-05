<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$configs = include('configs.php');
	foreach ($configs as $value) {

	echo $value.":".gettype($value)."\n";
	}
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