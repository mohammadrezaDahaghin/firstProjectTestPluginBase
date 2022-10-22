<?php

/*
Plugin Name: ای پی آی های وردپرسی
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: این یک پلاگین برای کار با Api های وردپرس می باشد
Version: 1.0
Author: mohammadreza
Author URI: http://URI_Of_The_Plugin_Author
License: A "Slug" license name e.g. GPL2
*/


define('WP_APIS_DIR',plugin_dir_path(__FILE__));
define('WP_APIS_URL',plugin_dir_url(__FILE__));
define('WP_APIS_INC',WP_APIS_DIR.'inc/');
define('WP_APIS_TPL',WP_APIS_DIR.'tpl/');

register_activation_hook(__FILE__,'wp_api_activation_plugin');
register_deactivation_hook(__FILE__,'wp_api_deactivation_plugin');

function wp_api_activation_plugin(){

}

function wp_api_deactivation_plugin(){


}

if(is_admin()){

//    print_r(WP_APIS_INC.'admin/menus.php');
    include (WP_APIS_INC.'admin/menus.php');
}


