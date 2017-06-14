<?php 
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);


$json = '
{
  "meta": {
    "code": 200,
    "server": "31.208"
  },
  "data": [
    {
      "id": 151880,
      "parent_id": false,
      "title": "",
      "slug": "151880",
      "type": "post.social",
      "privacy": "visibility.public",
      "guid": "e76d0",
      "content": {
        "text": "Good morning campers! Rise and Shine!",
        "html": "<p>Good morning campers! Rise and Shine!</p>",
        "summary": false,
        "banner": false,
        "is_edited": false
      },
      "audio": false,
      "tags": false,
      "geo": "",
      "files": false,
      "urls": {
        "canonical_url": "/post/151880",
        "full_url": "10centuries.org/post/151880",
        "alt_url": "10centuries.org/151880",
        "is_https": true
      },
      "thread": false,
      "mentions": false,
      "account": [
        {
          "id": 124,
          "avatar_url": "//cdn.10centuries.org/j3J28w/b0c497ec9071170ec3a5483581c9df49.jpg",
          "username": "dgold",
          "canonical_url": "https://10centuries.org/profile/dgold",
          "podcast_rss": false,
          "name": {
            "first_name": "Daniel",
            "last_name": "Goldsmith",
            "display": "dgold"
          },
          "counts": {
            "following": 11,
            "followers": 14,
            "stars": 39,
            "socialposts": 172,
            "blogposts": 0,
            "podcasts": 0
          },
          "description": {
            "text": "",
            "html": ""
          },
          "created_at": "2017-01-16T09:29:48Z",
          "timezone": "UTC",
          "verified": {
            "is_verified": false,
            "url": ""
          },
          "annotations": false,
          "cover_image": false,
          "evangelist": false,
          "follows_you": true,
          "you_follow": true,
          "is_muted": false,
          "is_silenced": false
        }
      ],
      "channel": {
        "id": 1,
        "owner_id": false,
        "type": "channel.global",
        "privacy": "visibility.public",
        "guid": "d9ba5",
        "created_at": "2015-08-01T00:00:00Z",
        "created_unix": 1438387200,
        "updated_at": "2015-08-01T00:00:00Z",
        "updated_unix": 1438387200
      },
      "client": {
        "hash": "60a52",
        "name": "Known Integration"
      },
      "created_at": "2017-06-09T09:58:17Z",
      "created_unix": 1497002297,
      "publish_at": "2017-06-09T09:58:17Z",
      "publish_unix": 1497002297,
      "updated_at": "2017-06-09T09:58:17Z",
      "updated_unix": 1497002297,
      "expires_at": false,
      "expires_unix": false,
      "is_visible": true,
      "is_muted": false,
      "is_deleted": false
    }
  ]
}';

$arrayName = json_decode($json, true);
//echo $arrayName['meta']['server'];
$tenclink = "https://" . $arrayName['data']['0']['urls']['full_url'];
echo $tenclink
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