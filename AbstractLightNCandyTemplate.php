<?php

abstract class LightNCandyTemplate extends QuickTemplate {

	/**
	 * Executes the template and returns the result
	 * @return string HTML
	 */
	public function execute() {
		$this->data['debughtml'] = MWDebug::getDebugHTML( $this->getSkin()->getContext() );
		return call_user_func( $this->getTemplate(), $this->data );
	}

	/**
	 * Override to return the template that will be used.
	 * @return callable Function
	 */
	abstract function getTemplate();
}
