<?php
/**
 * @author  HeyMehedi
 * @since   1.0.0
 * @version 1.0.0
 */

namespace HeyMehedi\Utils;

class Config {

	public static function get( string $key ): string {
		return self::file()[$key] ?? self::default( $key );
	}

	private static function file(): array {
		$path = __DIR__ . '/../../../..';
		$file = $path . '/heymehedi-utils-config.php';

		if ( file_exists( $file ) ) {
			return require_once $file;
		}

		return [];
	}

	private static function default( string $key ): string {
		$arr = [
			'project_key' => 'heymehedi_utils',
			'key_prefix'  => '_',
			'key_suffix'  => '_',
		];

		return $arr[$key] ?? '';
	}
}