# LivingStyleGuideSkin

MediaWiki skin for the the living styleguide.

## Installation

Clone the skin in `mediawiki/skins/` and install dependencies:
```
$ git clone git@github.com:werdnum/LivingStyleGuideSkin.git LivingStyleGuide
$ cd LivingStyleGuideSkin
$ composer install
$ bower install
```

Enable and set the skin as default, add this to `LocalSettings.php`:
```php
require_once "$IP/skins/LivingStyleGuideSkin/LivingStyleGuide.php";
$wgDefaultSkin = "LivingStyleGuide";
```