<?php
/**
 * @author  HeyMehedi
 * @since   1.0.0
 * @version 1.0.0
 */

namespace WPTH\Utils;

class Transient {
	private static function key( string $key ) {
		return Key::prefix( '_', '_' ) . trim( $key );
	}

	public static function set( string $key, $value, $expiration = DAY_IN_SECONDS ): bool {
		return set_transient( self::key( $key ), $value, $expiration );
	}

	public static function get( string $key ) {
		return get_transient( self::key( $key ) );
	}
}