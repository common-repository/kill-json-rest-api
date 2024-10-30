<?php
/**
 * Plugin Name: Kill JSON REST API
 * Description: Completely disables JSON REST API for both registered and anonymous users in WordPress 4.7.* and removes API links and tags.
 * Version: 1.1.0
 * Author: Armin Methadzevic
 * Author URI: mailto:armin.meth@gmail.com
 * License: GPL2+
 */

if (!class_exists('Kill_Json_Rest_Api'))
{

    class Kill_Json_Rest_Api
    {

        public static $instance;

        public static function init()
        {
            if (is_null(self::$instance)) {
                self::$instance = new Kill_Json_Rest_Api();
            }
            return self::$instance;
        }

        private function __construct()
        {
            add_filter(
                'rest_authentication_errors',
                array($this, 'return_error')
            );
            remove_action(
                'wp_head',
                'rest_output_link_wp_head'
            );
            remove_action(
                'wp_head',
                'wp_oembed_add_discovery_links'
            );
        }

        public function return_error()
        {
            return new WP_Error(
                'disabled',
                'JSON REST API is disabled.',
                ''
            );
        }
    }

    Kill_Json_Rest_Api::init();
}