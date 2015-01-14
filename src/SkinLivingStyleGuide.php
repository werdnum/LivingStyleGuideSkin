<?php

class SkinLivingStyleGuide extends SkinTemplate {
	public $skinname = 'test';
	public $stylename = 'test';
	public $template = 'LivingStyleGuideSkinTemplate';

	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$out->addModules( array( 'skin.styleguide', 'ext.bootstrap' ) );
	}

	public function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array( 'skin.styleguide', 'ext.bootstrap' ) );
	}
}
