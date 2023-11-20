<?php
/**
 * @author  HeyMehedi
 * @since   1.0.0
 * @version 1.0.0
 */

namespace WPTH\Utils;

class Options {
	private static function key( string $key ) {
		return Key::prefix( '_', '_' ) . $key;
	}

	public static function get( string $key, $default = false ) {
		return get_option( self::key( $key ), $default );
	}

	public static function set( string $key, $value, $autoload = 'no' ): bool {
		return update_option( self::key( $key ), $value, $autoload );
	}

	public static function delete( string $key ): bool {
		return delete_option( self::key( $key ) );
	}
}