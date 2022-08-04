<?php
function wps_admin_menu()
{
    global $wpdb,$table_prefix;
    $total_visits=$wpdb->get_row("SELECT SUM(total_visits) as total_visits,SUM(unique_visits) as totla_unique_visits FROM {$table_prefix}wps_visits");


    include WPS_TPL."admin_main_page.php";
}


function wpdocs_register_my_custom_menu_page() {
    add_menu_page(
       'آمار بازدید کاربران',
        'آمار بازدید کاربران',
        'manage_options',
        'wps/wps-stat.php',
        'wps_admin_menu',
        'dashicons-chart-area',
        6
    );
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
