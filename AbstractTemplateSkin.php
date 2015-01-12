<?php

abstract class AbstractTemplateSkin extends Skin {

	public function outputPage( OutputPage $out = null ) {
		$template = $this->getTemplate();
		$templateData = $this->getTemplateData();
		$html = call_user_func( $template, $templateData );
		$out->addHTML( $html );
	}

	/**
	 * Override this method to provide your template
	 * @return callable Function which should be called with the template data as an argument
	 */
	protected abstract function getTemplate();

	/**
	 * Override this method to provide data to your template
	 * @return array Suitable to pass to the template
	 */
	protected abstract function getTemplateData();

	/**
	 * Add specific styles for this skin
	 * Stolen from SkinTemplate
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) {
		$out->addModuleStyles( array(
			'mediawiki.legacy.shared',
			'mediawiki.legacy.commonPrint',
			'mediawiki.ui.button'
		) );
	}
}