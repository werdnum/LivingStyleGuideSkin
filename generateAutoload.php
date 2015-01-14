<?php

require_once __DIR__ . '/../../includes/utils/AutoloadGenerator.php';

function main() {
	$base = __DIR__;
	$generator = new AutoloadGenerator( $base );
	$generator->readDir( "$base/src" );

	$generator->generateAutoload( $base );

	echo "Done.\n\n";
}

main();
