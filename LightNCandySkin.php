<?php
/**
 * MediaWiki Extension: LightNCandySkin
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * This program is distributed WITHOUT ANY WARRANTY.
 */

/**
 *
 * @file
 * @ingroup Extensions
 * @author Andrew Garrett
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install this extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/LightNCandySkin/LightNCandySkin.php" );
EOT;
	exit( 1 );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'LightNCandySkin',
	'url' => 'URL to extension information',
	'author' => array(
		'Andrew Garrett',
	),
	'descriptionmsg' => 'lightncandyskin-desc',
);

$wgResourceModules += array(
	'ext.bootstrap' => array(
		'localBasePath' => __DIR__ . "/bower_components/bootstrap/dist",
		'remoteExtPath' => 'LightNCandySkin/bower_components/bootstrap/dist',
		'group' => 'ext.lightncandyskin',
		'scripts' => 'js/bootstrap.min.js',
		'styles' => 'css/bootstrap.min.css',
	),
	'skin.styleguide' => array(
		'localBasePath' => __DIR__ . "/bower_components/living-styleguide-template/resources",
		'remoteExtPath' => 'LightNCandySkin/bower_components/living-styleguide-template/resources',
		'group' => 'ext.lightncandyskin',
		'styles' => 'master.less',
		'dependencies' => 'ext.bootstrap',
	),
);

require_once __DIR__."/autoload.php";

SkinFactory::getDefaultInstance()->register( 'test', 'Test Skin', function(){
	return new SkinTest;
} );
