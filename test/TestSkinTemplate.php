<?php

class TestSkinTemplate extends LightNCandyTemplate {
	public function getTemplate() {
		$templating = new OOUIPlayground\Templating( __DIR__ );
		return $templating->getTemplate( 'TestSkin' );
	}
}
