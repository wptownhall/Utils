<?php
/**
 * @author  WPtownhall
 * @since   1.0.0
 * @version 1.0.0
 */

namespace WPTH\Utils;

class Random {
	/**
	 * Randomly Generate a Number
	 */
	public static function number( int $len = 16 ): int {
		$number = mt_rand( 1000000000000000, 9999999999999999 );

		return $number;
	}

	/**
	 * Randomly Generate a Key
	 */
	public static function key( int $len = 40 ): string {
		$characters = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTWYXZ";
		$key        = '';
		for ( $i = 0; $i < $len; $i++ ) {
			$key .= $characters[rand( 0, $len )];
		}

		return $key;
	}
}