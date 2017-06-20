<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$configs = include('configs.php');

$json = '
{"location":"https:\/\/hylozoist.ascraeus.org\/2017\/did-a-lot-of-gardening-stuff-today-putting-pic-of"}
';

$arrayName = json_decode($json, true);
//echo $arrayName['meta']['server'];
$link = $arrayName['location'];
echo $link. "\n";


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