<?php

namespace DeliciousBrains\SpinupWp;

use WP_CLI;

class Cli {

	/**
	 * Register a CLI command.
	 *
	 * @param string $callable
	 *
	 * @return bool
	 */
	public function register_command( $callable ) {
		if ( ! defined( 'WP_CLI' ) || ! WP_CLI ) {
			return false;
		}

		return WP_CLI::add_command( 'spinupwp', $callable );
	}
}