<?php

return (object) array(
	// First some settings for the site
	'userName' => 'Nitin Khanna',					// Please use your own name :)
	'siteUrl' => 'yourlivebloghere.com',			// the URL for your liveBlog
	'siteTitle' => 'your site name',				// make it cool!
	'siteDescription' => 'describe your site', 		// used for feeds
	'password' => 'correct-horse-battery-staple',	// https://xkcd.com/936/
	'timezone' => 'America/Vancouver',				// http://php.net/manual/en/timezones.php

	// Config Block for Twitter
	'postTwitter' => True,							// Set to False (boolean) to disable twitter crossposts
	'twitterName' => 'poopyCakes',					// your twitter account name, don't use the @
	'twAPIkey' => 'WomtvR2YoT',						// Create an app on dev.twitter.com for your account.
	'twAPIsecret' => 'NILIDJXg1e',					// APIkey & APIsecret are the APP's key & Secret
	'twUserKey' => 'ILs4jUS7a6',					// UserKey & User Secret are under 'Your access token'
	'twUserSecret' => 'NYbGUfuNUh',					// Generate those on dev.twitter.com

	// Config Block for Known
	'postKnown' => True,							// Set to False (boolean) to disable Known crossposts
	'knownSite' => 'myknown.withknown.com',			// change to your own sitename
	'knownUser' => 'myknown',						// the name of your known account
	'knownAPIkey' => '49Zx87d0je',					// get this from known
	'knownTwName' => 'cakesMan',					// the twitter account known uses for crossposts

	// Config Block for 10Centuries
	'postTenc' => True,								// Set to False (boolean) to disable 10C crossposts
	'tenCauthtoken' => 'yopEPNfq34',				// your 10Centuries.org API key. see 10C API guide.

	// Config Block for Mastodon
	'postMastodon' => True,							// Set to False (boolean) to disable Mastodon crossposts
	'mastodonInstance' => 'servername.ext',			// your Mastodon Instance
	'mastodonToken' => 'uWo42Bca91',				// get an auth code using Mastodon docs

	// Config for micro.blog
	'pingMicro' => True 							// Set to False (boolean) if you don't use micro.blog
);

?>

