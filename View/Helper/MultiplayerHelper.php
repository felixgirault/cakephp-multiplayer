<?php

use Multiplayer\Multiplayer;



/**
 *	A simple proxy to configure and use Multiplayer.
 *
 *	@author Félix Girault <felix.girault@gmail.com>
 *	@package Multiplayer.View.Helper
 *	@license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class MultiplayerHelper extends AppHelper {

	/**
	 *	Custom options for Multiplayer.
	 *
	 *	@var array
	 */

	public $options = array( );



	/**
	 *	Multiplayer instance.
	 *
	 *	@var fg\Multiplayer\Multiplayer
	 */

	protected $_Multiplayer = null;



	/**
	 *	Constructor.
	 *
	 *	@param View $View View using the helper.
	 *	@param array $settings Helper settings.
	 */

	public function __construct( View $View, array $settings = array( )) {

		parent::__construct( $View, $settings );

		$this->_Multiplayer = new Multiplayer( $this->options );
	}



	/**
	 *	@see fg\Multiplayer\Multiplayer::html( )
	 */

	public function html( $source, $options ) {

		return $this->_Multiplayer->html( $source, $options );
	}
}
