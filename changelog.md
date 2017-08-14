# Change Log

## 2017-07-04

### Added
- Post to pnut.io. API Key specified in configs.php.

### Changed
- The liveblog no longer breaks when reading an 'older' format posts file. Regression information removed.
- The stored password is now a sha256 hash of the user's password. This substantially improves the security of the liveblog.

## 2017-06-20 

### Added

- Syndication link to crosspost in withKnown
- Tweetstorm handling - splits long posts at 140 chars and post to twitter.

### Changed

- configs.php now allows the user to turn on/off syndication posts on a per-service basis. Empty elements in the results array are still entered for each service to avoid later issues.

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

