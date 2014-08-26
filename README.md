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

  This is a very simple liveblog. It posts to itself (sample at [Nitin Khanna's Liveblog](http://liveblog.nitinkhanna.com/) ) and to twitter and ADN.  
  It's not fancy, but it works. Beware, it's very easily hackable so make sure the passphrase you setup is strong.  
  If a post is >140 chars, it truncates to 75 chars and adds your liveblog link to the end. Same for ADN (truncates to 190 chars)  


Setup
=====

  You'll need -  
    1. ADN access token.  
    2. Twitter consumer key and token.  

  Find and replace the following -  
  
  In index.php -   
    1. YOURLIVEBLOGHERE.COM - with your sitename.  
    2. YOURADNUSERNAMEHERE  
    3. YOURTWITTERUSERNAMEHERE  
    4. YOURLiveblogTITLEHERE  

  In create.php -  
    1. YOURSUPERSECRETPASSWORDHERE - This is your passphrase to save things. This is your last line of defence. Make it snazzy.  
    2. YOURLIVEBLOGHERE.COM  
    3. ADNACCESSTOKENHERE - Setup an ADN app for free at [ADN Developer's Site](developers.app.net) and then generate an access token for your app  
    4. TWITTERAPIKEY, TWITTERAPISECRET  
    5. TWITTERUSERTOKEN, TWITTERUSERTOKENSECRET  
    6. YOURTIMEZONEHERE - Mine's America/Denver  
    7. YOURNAMEHERE - This is your name. Hi. Mine's Nitin Khanna  


Issues
======
  1. Very weak login  
  2. Doesn't support hashtags in Share links (Hashtags and @-mentions work when posting)  
  3. Too much stuff is inline. This is a hack project. If you want to help me clean up the code, I'll accept all pull requests.  
  4. I created this when I was exporting content from the WP liveblog plugin because that one didn't support an infinite stream. So, there could be bugs because of my cleanup. Oh well.  
