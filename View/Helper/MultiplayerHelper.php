<?php

/**
 *	A simple proxy to configure and use Multiplayer.
 *
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@package Multiplayer.View.Helper
 *	@license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class MultiplayerHelper extends AppHelper {

	/**
	 *
	 */

	public $options = array( );



	/**
	 *
	 *
	 *	@var fg\Multiplayer\Multiplayer
	 */

	protected $_Multiplayer = null;



	/**
	 *
	 */

	public function __construct( View $View, array $settings = array( )) {

		parent::__construct( $View, $settings );

		$this->_Multiplayer = new fg\Multiplayer\Multiplayer( $this->options );
	}



	/**
	 *
	 */

	public function html( $source, $options ) {

		return $this->_Multiplayer->html( $source, $options );
	}
}
