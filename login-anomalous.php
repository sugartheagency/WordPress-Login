<?php

/**
 *
 * @link              http://www.anomalous.co.za
 * @since             1.0.0
 * @package           wordpress-login
 *
 * @wordpress-plugin
 * Plugin Name:       Front End Login WordPress
 * Plugin URI:        http://www.anomalous.co.za
 * Description:       Front End Login, Forgot Password, Register and User Windows with Short Codes
 * Version:           1.0.0
 * Author:            Donovan Maidens
 * Author URI:        http://www.anomalous.co.za
 */

if (!defined('WPINC')) {
    die;
}
if(!class_exists("LoginAnomalousPlugin"))
{
    /**
     * class:   LoginAnomalousPlugin
     * desc:    Plugin Class to include the functions in the login.php files.
     */
    class LoginAnomalousPlugin
    {
        /**
         * Created an instance of the LoginAnomalousPlugin class
         */
        public function __construct()
        {
            require_once(sprintf("%s/includes/login.php", dirname(__FILE__)));
        } // END public function __construct()

        /**
         * Hook into the WordPress activate hook
         */
        public static function activate()
        {
            // Do something
        }

        /**
         * Hook into the WordPress deactivate hook
         */
        public static function deactivate()
        {
            // Do something
        }
    } // END class LoginAnomalousPlugin
} // END if(!class_exists("LoginAnomalousPlugin"))

if(class_exists('LoginAnomalousPlugin'))
{    
    // Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('LoginAnomalousPlugin', 'activate'));
    register_deactivation_hook(__FILE__, array('LoginAnomalousPlugin', 'deactivate'));
    
    // instantiate the plugin class
    $plugin = new LoginAnomalousPlugin();
} // END if(class_exists('LoginAnomalousPlugin'))