<?php
/**
 * @author  HeyMehedi
 * @since   1.0.0
 * @version 1.0.0
 */

namespace HeyMehedi\Utils;

class Plugin {
	public static function is_active( string $plugin ): bool {
		self::includes();

		return is_plugin_active( $plugin );
	}

	public static function list(): array {
		self::includes();

		return get_plugins();
	}

	public static function includes(): void {
		if ( ! function_exists( 'is_plugin_active' ) || ! function_exists( 'get_plugins' ) ) {
			require_once ABSPATH . 'wp-admin/includes/plugin.php';
		}
	}
}