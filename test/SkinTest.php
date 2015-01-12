<?php

class SkinTest extends SkinTemplate {
	public $skinname = 'test';
	public $stylename = 'test';
	public $template = 'TestSkinTemplate';

	public function setupSkinUserCss( OutputPage $out ) {
		$out->addModuleStyles( array( 'skin.styleguide', 'ext.bootstrap' ) );
		$out->addModules( array( 'skin.styleguide', 'ext.bootstrap' ) );
	}
}
