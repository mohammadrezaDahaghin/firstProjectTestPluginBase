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

    add_role('mandarari_manager', 'مدیر تخمی', 
             ['read'=>true,
            'write'=>true,
            'edit_posts'=>true,
            'remove_products'=>true
            ]);

            $my_role= get_role('administrator');
            $my_role -> add_cap('remove_products');
}

function wp_api_deactivation_plugin(){


}

add_action( 'wp_enqueue_scripts','wpapis_register_style');
add_action( 'admin_enqueue_scripts','wpapis_register_style');

function wpapis_register_style(){
    wp_register_style('wpapis-main-style',WP_APIS_URL.'assets/css/main.css');
    wp_enqueue_style('wpapis-main-style');


    if(is_admin()){
        wp_register_script( 'wpapis_admin-script',WP_APIS_URL.'assets/js/wpapis-admin.js',['jquery'],'1.8.0',true);
        wp_enqueue_script( 'wpapis_admin-script');
    }else{
        wp_register_script( 'wpapis_admin-script',WP_APIS_URL.'assets/js/wpapis.js',['jquery'],'19.0',false);
        wp_enqueue_script( 'wpapis_admin-script');
    }
}





if(is_admin()){

//    print_r(WP_APIS_INC.'admin/menus.php');
    include (WP_APIS_INC.'admin/menus.php');
}






