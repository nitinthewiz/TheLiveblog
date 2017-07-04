TheLiveblog
===========

  A simple liveblog using PHP that posts to itself, withKnown, 10Centuries, Mastodon, Pnut, micro.blog (because it has an RSS feed), and Twitter at the same time. Very rude, very hackable. Beware.

Requirements
============

1. PHP > 5.3 
2. [Codebird PHP for Twitter](https://github.com/jublonet/codebird-php)
3. PHP Curl needs to be installed for CodeBird. There are ways to disable that. Look 'em up. 

What it is and what it does
===========================

  This is a very simple liveblog. It posts to itself (sample at [Nitin Khanna's Liveblog](http://liveblog.nitinkhanna.com/) ) and to Twitter / 10Centuries / withKnown / pnut/ Mastodon. It's not fancy, but it works.  
  
  If a post is >140 chars, it splits the text to 140 char tweets and posts them as a twitter thread. This functionality is crude and often cuts in between words, so it might not look good. But it works.


Setup
=====

  You'll need -  
  
  1. Twitter consumer key and token
  2. Twitter userkey and secret
  2. 10Centuries API key 
  3. Withknown API key
  4. API Key for your Mastodon account.
  5. API Key for your pnut account.
  6. a sha256 hash of your chosen password.
  
  You can obtain the hash of the password on the command line. In linux environment, this would be:

  ```bash
  $ echo -n correct-horse-battery-staple | sha256sum
  87cbebfeebc05f7c54ac9336c4b4bbec831227a641951a4bde7edd56020f8590  -
  $
  ```

  or, in macos:

  ```bash
  echo -n correct-horse-battery-stample | shasum -a 256
  87cbebfeebc05f7c54ac9336c4b4bbec831227a641951a4bde7edd56020f8590  -
  $
  ```

  The `-n` flag is _necessary,_ otherwise the hash will include the newline.

  To set your configuration, just open `configs.php` -- all items are explained in the document, along with where to find them. Replace the dummy values with your own values, and choose which of the services you want to use with boolean `True` and `False`.
  
How to use
==========
  Now that you've setup the files, upload them to your server (if you've not already done that). In some instances, you'll have to change the owner of the following files from your own user to 'www-data' - create.php, index.php, text.txt
  
  Open yoursite.com/create.php and bookmark this.

  The textarea is where you'll write your post. The Passphrase Field is where you enter your passphrase, as set out in your config. Password managers should recognise the passphrase area and offer to remember the phrase for you. Character count is filled out as you proceed.
  
  Fill both and hit submit. If the post goes through, you'll see the syndication links to your post displayed above the textarea.
  
  If it fails, well bupkes.
  
  The posts will be displayed on yoursite.com. Syndication links are displayed by icons - Known is the circle-K, 10C is the cup of coffee, Pnut the loudhailer<sup>1</sup>, Mastodon uses the mastodon.social instance loge, twitter (obvs) is the twitter icon.   

Issues
======
  1. Doesn't support hashtags in Share links (Hashtags and @-mentions work when posting)  
  2. Too much stuff is inline. This is a hack project. If you want to help me clean up the code, I'll accept all pull requests.  
  3. I created this when I was exporting content from the WP liveblog plugin because that one didn't support an infinite stream. So, there could be bugs because of my cleanup. Oh well.

ToDo
====
[] I would like to apply the [indieweb mf2](https://indieweb.org/microformats) tags to the list of posts
[] Create a proper 'settings' page which would save all the configuration items.

<sup>1</sup>: pnut's 'official' logo is not good. It is too wide, and the official 'icon' offering looks bad at small sizes.
