<?php
/**
 * @author  HeyMehedi
 * @since   1.0.0
 * @version 1.0.0
 */

namespace WPTH\Utils;

class Args {
	public static function ensure( array $required_args, array $specified_args ): bool {
		$not_specified_args = array_diff( $required_args, array_keys( $specified_args ) );

		if ( $not_specified_args ) {
			return false;
		}

		return true;
	}
}