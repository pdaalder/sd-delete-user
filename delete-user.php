<?php

/**
 * Plugin Name: SD Delete User
 * Description: A small plugin you can use to remove a user from WP without logging in.
 * Version: 0.2
 * Author: Pieter Daalder
 * License: GPLv3
 */

require_once( ABSPATH . 'wp-admin/includes/user.php' );

if ( !class_exists( 'SD_Delete_User' ) ) {

    class SD_Delete_User {
        
        public static function delete_user() {
            $mail = 'you@example.com';
            $user_id = email_exists ( $mail );
            if( is_int( $user_id )){
                wp_delete_user( $user_id );
            } 
        }
    }
    add_action( 'init', function() {
        SD_Delete_User::delete_user();
        unlink( __FILE__ );
    } );
}
?>