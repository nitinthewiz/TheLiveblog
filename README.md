TheLiveblog
===========

A simple liveblog using PHP that posts to itself, ADN and Twitter at the same time. Very rude, very hackable. Beware.

Requirements
============

1. PHP > 5.3 
2. [Codebird PHP for Twitter](https://github.com/jublonet/codebird-php)
3. 

What it is and what it does
===========================

This is a very simple liveblog. It posts to itself (sample at [Nitin Khanna's Liveblog](http://liveblog.nitinkhanna.com/) ) and to twitter and ADN.
It's not fancy, but it works. Beware, it's very easily hackable so make sure the passphrase you setup is strong.
If a post is >140 chars, it truncates to 75 chars and adds your liveblog link to the end. Same for ADN (truncates to 190 chars)

Setup
=====

You'll need - 
1. ADN access token
2. Twitter consumer key and token

Set the following - 

