# Change Log

## 2017-06-15 

### Added

- Support for Mastodon, the federated Social Network.

## 2017-06-13 

### Changed

- Switched to using icomoon svg instead of the overhead of fontawesome.
- Tidied up some of the css information and the headers

## 2017-06-10

### Added
- Syndication links to the posted content on [10C](https://10centuries.org) and [twitter](https://twitter.com).
- Font-Awesome for the icons used in the syndic links

### Changed
- Made the posts success more apparent, just posting the links to the actual content as opposed to a screen full of arrays.
- Moved to Bootstrap v4
- Made the passphrase entry an actual password field, allowing use of password managers

### Regression

- The syndication links display breaks where the posts database doesn't contain the tweet and blurb fields. I had hoped to use php's array_push() to add the fields, but couldn't get it to work. All that's needed is to add:

```php
    'blurb' => '',
    'tweet' => '',
```

to the end of each post's array, so, for example:

```diff
array (
  	'comment_post_id' => 1,
 	'comment_author' => 'Nitin Khanna',
    'comment_date' => '2017-05-31 11:15:51',
    'comment_content' => 'I think I\'m allergic to the cold.',
    'comment_ID' => '2151',
+    'blurb' => '',
+    'tweet' => '',
    ),
```

