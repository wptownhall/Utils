<?php
/**
 * @author  WPtownhall
 * @since   1.0.0
 * @version 1.0.0
 */

namespace WPTH\Utils;

class Key {

	public static $project_name = 'project_name';

	public static function get( string $key ): string {
		return sprintf( '%s_%s', self::prefix(), trim( $key ) );
	}

	public static function prefix( string $before = '', string $after = '' ): string {
		return sprintf( '%s%s%s', $before, self::$project_name, $after );
	}

	private static function generate(): string {
		return '';
	}
}