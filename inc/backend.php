<?php
function wps_admin_menu()
{

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
