TheLiveblog
===========

  A simple liveblog using PHP that posts to itself, ADN and Twitter at the same time. Very rude, very hackable. Beware.

Requirements
============

  1. PHP > 5.3 
  2. [Codebird PHP for Twitter](https://github.com/jublonet/codebird-php)
  3. PHP Curl needs to be installed for CodeBird. There are ways to disable that. Look 'em up. 

What it is and what it does
===========================

  This is a very simple liveblog. It posts to itself (sample at [Nitin Khanna's Liveblog](http://liveblog.nitinkhanna.com/) ) and to Twitter / ADN.  
  It's not fancy, but it works. Beware, it's very easily hackable so make sure the passphrase you setup is strong.  
  If a post is >140 chars, it truncates to 75 chars and adds your liveblog link to the end. Same for ADN (truncates to 190 chars)  


Setup
=====

  You'll need -  
  
    1. Twitter consumer key and token. 
    2. 10Centuries API key 
    3. Withknown API key 
    4. (ADN is dead. Long live ADN) ~~ADN access token.~~

  Find and replace the following -  
  
  In index.php -
  
    1. YOURLIVEBLOGHERE.COM - with your sitename.  
    2. YOURADNUSERNAMEHERE  (Ignore if you want to. This function will not get fired now)
    3. YOURTWITTERUSERNAMEHERE  
    4. YOURLiveblogTITLEHERE  

  In create.php -
  
    1. YOURSUPERSECRETPASSWORDHERE - This is your passphrase to save things. This is your last line of defence. Make it snazzy.  
    2. YOURLIVEBLOGHERE.COM  
    3. ~~ADNACCESSTOKENHERE - Setup an ADN app for free at [ADN Developer's Site](http://developers.app.net) and then generate an access token for your app ()~~
    4. TWITTERAPIKEY, TWITTERAPISECRET  
    5. TWITTERUSERTOKEN, TWITTERUSERTOKENSECRET  
    6. YOURTIMEZONEHERE - Mine's America/Vancouver. This is based on PHP timezones which is from the list [here](http://php.net/manual/en/timezones.php)
    7. YOURNAMEHERE - This is your name. Hi. Mine's Nitin Khanna  
    8. YOURFANCYPANTSAUTHTOKENHERE - This is your 10Centuries Auth token. Refer [here](https://pinboard.in/u:larand/t:10Centuries/) to see how to generate it.
    9. YOURKNOWNUSERNAME, YOURSUPERSECRETKNOWNAPIKEY, YOURTWITTERUSERNAME - This is your Known Username, your Known API key (user withknown dev docs to find how to get it. I forget), and your twitter username. The idea is that you can get known to post to twitter for you. There is a limitation here, I believe, that without your twitter username this function won't work. I haven't tested it without the twitter username. Left to reader as exercise.
    
  
How to use
==========
  Now that you've setup the files, upload them to your server (if you've not already done that) and open yoursite.com/create.php and bookmark this.   
  The first field is your post and the second, smaller field is the passphrase.   
  Fill both and hit submit. If the post goes through, you'll see the words "Array" and the postID (it'll start with 1).   
  If it fails, well bupkis.  
  The posts will be displayed on yoursite.com   

Issues
======
  1. Very weak login  
  2. Doesn't support hashtags in Share links (Hashtags and @-mentions work when posting)  
  3. Too much stuff is inline. This is a hack project. If you want to help me clean up the code, I'll accept all pull requests.  
  4. I created this when I was exporting content from the WP liveblog plugin because that one didn't support an infinite stream. So, there could be bugs because of my cleanup. Oh well.
