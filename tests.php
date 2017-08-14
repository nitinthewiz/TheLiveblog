<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);

	$configs = include('configs.php');

$json = '
{
  "meta": {
    "code": 201
  },
  "data": {
    "created_at": "2016-12-22T14:49:16Z",
    "guid": "43414D15-AF76-448E-8FB0-B8CABBB325A9",
    "id": "2392",
    "source": {
      "id": "3PFPMSet53RutGINA8e5HWqYg_UCDHad",
      "link": "http://xyz.s3rv.com",
      "name": "Broadsword"
    },
    "thread_id": "2392",
    "counts": {
      "bookmarks": 0,
      "reposts": 0,
      "replies": 0,
      "threads": 0
    },
    "content": {
      "html": "<span itemscope=\"https://pnut.io/schemas/Post\"><span data-tag-name=\"system\" itemprop=\"tag\">#system</span> of a duck</span>",
      "text": "#system of a duck",
      "entities": {
        "links": [],
        "mentions": [],
        "tags": [
          {
            "len": 7,
            "pos": 0,
            "text": "system"
          }
        ]
      }
    },
    "you_bookmarked": false,
    "you_reposted": false
  }
}
';

$arrayName = json_decode($json, true);
//echo $arrayName['meta']['server'];
var_dump($arrayName['data']['id']);
//echo $link. "\n";


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