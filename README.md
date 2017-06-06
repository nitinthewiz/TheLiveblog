TheLiveblog
===========

  A simple liveblog using PHP that posts to itself, withKnown, 10Centuries, micro.blog (because it has an RSS feed), and Twitter at the same time. Very rude, very hackable. Beware.

Requirements
============

1. PHP > 5.3 
2. [Codebird PHP for Twitter](https://github.com/jublonet/codebird-php)
3. PHP Curl needs to be installed for CodeBird. There are ways to disable that. Look 'em up. 

What it is and what it does
===========================

  This is a very simple liveblog. It posts to itself (sample at [Nitin Khanna's Liveblog](http://liveblog.nitinkhanna.com/) ) and to Twitter / 10Centuries / withKnown.
  It's not fancy, but it works. Beware, it's very easily hackable so make sure the passphrase you setup is strong.  
  If a post is >140 chars, it truncates to 75 chars and adds your liveblog link to the end.


Setup
=====

  You'll need -  
  
  1. Twitter consumer key and token
  2. Twitter userkey and secret
  2. 10Centuries API key 
  3. Withknown API key 
  
  Open `configs.php` -- all items are explained in the document, along with where to find them. Replace the dummy values with your own values.
  
How to use
==========
  Now that you've setup the files, upload them to your server (if you've not already done that). In some instances, you'll have to change the owner of the following files from your own user to 'www-data' - create.php, index.php, text.txt
  
  Open yoursite.com/create.php and bookmark this.
  
  The first field is your post and the second, smaller field is the passphrase.   
  
  Fill both and hit submit. If the post goes through, you'll see the words "Array" and the postID (it'll start with 1).   
  
  If it fails, well bupkes.
  
  The posts will be displayed on yoursite.com   

Issues
======
  1. Very weak login  
  2. Doesn't support hashtags in Share links (Hashtags and @-mentions work when posting)  
  3. Too much stuff is inline. This is a hack project. If you want to help me clean up the code, I'll accept all pull requests.  
  4. I created this when I was exporting content from the WP liveblog plugin because that one didn't support an infinite stream. So, there could be bugs because of my cleanup. Oh well.
