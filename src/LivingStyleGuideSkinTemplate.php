<?php

class LivingStyleGuideSkinTemplate extends LightNCandyTemplate {
	public function getTemplate() {
		$templating = new SimpleLightNCandy( __DIR__ . '/../templates' );

		$templating->addHelper( 'msg',
			function( array $args, array $named ) {
				$message = null;
				$str = array_shift( $args );

				return wfMessage( $str )->params( $args )->text();
			}
		);

		return $templating->getTemplate( 'Skin' );
	}
}
