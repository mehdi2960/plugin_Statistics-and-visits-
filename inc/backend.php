<?php
function wps_admin_menu()
{
    global $wpdb, $table_prefix;
    $todate = date('Y-m-d');
    $totalVisits = $wpdb->get_row("SELECT SUM(total_visits) as total_visits,SUM(unique_visits) as totla_unique_visits FROM {$table_prefix}wps_visits");
    $todayStatitics = $wpdb->get_row("SELECT total_visits,unique_visits FROM {$table_prefix}wps_visits WHERE date='{$todate}'");

    //yesterday stat
    $yesterdayStatitics = $wpdb->get_row("SELECT total_visits,unique_visits FROM wpdiv_wps_visits WHERE date=DATE_SUB('{$todate}',INTERVAL 1 DAY);");

    include WPS_TPL . "admin_main_page.php";
}

//Register custom menu page
function wpdocs_register_my_custom_menu_page()
{
    add_menu_page(
        'آمار بازدید کاربران',
        'آمار بازدید کاربران',
        'manage_options',
        'wps/wps-stat.php',
        'wps_admin_menu',
        'dashicons-chart-area',
        6
    );

    wps_load_assets();
}

add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

//define load asset
function wps_load_assets()
{
    wp_register_script('chart.js',WPS_JS.'chart.js',array('jquery'));
    wp_enqueue_script('chart.js');
}