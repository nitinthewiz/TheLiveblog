<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);


$json = '
{
    "id": 9134498,
    "created_at": "2017-06-14T10:12:04.591Z",
    "in_reply_to_id": null,
    "in_reply_to_account_id": null,
    "sensitive": null,
    "spoiler_text": "",
    "visibility": "public",
    "language": "en",
    "application": {
        "name": "caconym",
        "website": null
    },
    "account": {
        "id": 44471,
        "username": "dgold",
        "acct": "dgold",
        "display_name": "Daniel Goldsmith 🍷",
        "locked": false,
        "created_at": "2017-04-04T11:31:19.151Z",
        "followers_count": 4,
        "following_count": 12,
        "statuses_count": 14,
        "note": "<p>Sometimes I feel like I&apos;m from another planet</p>",
        "url": "https://mastodon.social/@dgold",
        "avatar": "https://files.mastodon.social/accounts/avatars/000/044/471/original/a90b11184a0beaba.png",
        "avatar_static": "https://files.mastodon.social/accounts/avatars/000/044/471/original/a90b11184a0beaba.png",
        "header": "/headers/original/missing.png",
        "header_static": "/headers/original/missing.png"
    },
    "media_attachments": [],
    "mentions": [],
    "tags": [],
    "uri": "tag:mastodon.social,2017-06-14:objectId=9134498:objectType=Status",
    "content": "<p>This is a short test post. Saluton mondo!</p>",
    "url": "https://mastodon.social/@dgold/9134498",
    "reblogs_count": 0,
    "favourites_count": 0,
    "reblog": null,
    "favourited": false,
    "reblogged": false,
    "muted": false
}';

$arrayName = json_decode($json, true);
//echo $arrayName['meta']['server'];
$link = $arrayName['url'];
echo $link
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