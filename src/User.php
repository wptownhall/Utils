<?php
/**
 * @author  WPtownhall
 * @since   1.0.0
 * @version 1.0.0
 */

namespace WPTH\Utils;

class User {
	public static function data( int $user_id ) {
		if ( ! function_exists( 'get_userdata' ) ) {
			require_once ABSPATH . WPINC . '/pluggable.php';
		}

		return get_userdata( $user_id );
	}

	public static function display_name( int $user_id ) {
		$user_data = self::data( $user_id );

		if ( $user_data ) {
			if ( ! empty( $user_data->display_name ) ) {
				return $user_data->display_name;
			} elseif ( ! empty( $user_data->first_name ) ) {
				return $user_data->first_name;
			} else {
				return $user_data->user_login;
			}
		}

		return __( 'Invalid User', 'wpth' );
	}
}