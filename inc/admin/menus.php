<?php


add_action('admin_menu','wp_api_regisetr_menu');

function wp_api_regisetr_menu(){

    add_menu_page('منابع','منابع','manage_options','resources_my_wpdb','wp_apis_myhandler');

    add_submenu_page('resources_my_wpdb','افراد','افراد','manage_options','user_my_wpdb','wp_apis_users_handler');

}

function wp_apis_myhandler(){
    include WP_APIS_TPL.'admin/menu/main.php';
}

function wp_apis_users_handler(){
    global $wpdb;
    $action=$_GET['action'];

    if ($action=='delete'){
        $item=intval($_GET['item']);
        if ($item>0){
            $wpdb->delete($wpdb->prefix.'sample',['ID'=>$item]);


        }
    }

    if ($action=='add'){
        if (isset($_POST['savedata'])){

            $wpdb->insert($wpdb->prefix.'sample',[
                'firstname'=>$_POST['firstname'],
                'lastname'=>$_POST['lastname'],
                'number'=>$_POST['phonenumber']
            ]);
        }
        include WP_APIS_TPL.'admin/menu/add.php';


    }elseif ($action=='update'){
        if (isset($_POST['updatedata'])){
            $wpdb->update($wpdb->prefix.'sample',[
                    'firstname'=>$_POST['firstname'],
                    'lastname'=>$_POST['lastname'],
                    'number'=>$_POST['phonenumber']
                ],
                ['id'=>$_GET['uid']]
            );

        }

        include WP_APIS_TPL.'admin/menu/add.php';

    }else{
        $samples=$wpdb->get_results("SELECT * FROM {$wpdb->prefix}sample");

        include WP_APIS_TPL.'admin/menu/users.php';
    }

}
