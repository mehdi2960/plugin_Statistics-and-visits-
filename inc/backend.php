<?php
function wps_admin_menu()
{
    global $wpdb, $table_prefix;
    $todate = date('Y-m-d');
    $totalVisits = $wpdb->get_row("SELECT SUM(total_visits) as total_visits,SUM(unique_visits) as totla_unique_visits FROM {$table_prefix}wps_visits");
    $todayStatitics = $wpdb->get_row("SELECT total_visits,unique_visits FROM {$table_prefix}wps_visits WHERE date='{$todate}'");

    //yesterday stat
    $yesterdayStatitics = $wpdb->get_row("SELECT total_visits,unique_visits FROM wpdiv_wps_visits WHERE date=DATE_SUB('{$todate}',INTERVAL 1 DAY);");

    $visitsChartData = $wpdb->get_results("SELECT `date`,total_visits FROM {$table_prefix}wps_visits");

    //show label And date
    $visitsDates = [];
    $totalvisits = [];
    foreach ($visitsChartData as $item) {
        $visitsDates[] = $item->date;
        $totalvisits[] = $item->total_visits;
    }

    include WPS_TPL . "admin_main_page.php";
}

function wps_admin_menu_settings()
{
    $tabs = array(
        'general' => 'عمومی',
        'messages' => 'اطلاع رسانی',
        'about' => 'درباره ما',
    );

    $currentTab = isset($_GET['tab']) ? $_GET['tab'] : 'general';

    //update admin plugin settings
    if (isset($_POST['submit'])) {
        $wps_enable = isset($_POST['wps_enable']) ? 1 : 0;
        update_option('wps_enable', $wps_enable);

        //update admin email settings for wps plugin
        !empty($_POST['wps_admin_email'])
        && filter_var($_POST['wps_admin_email'], FILTER_VALIDATE_EMAIL)
            ? update_option('wps_admin_email', esc_sql($_POST['wps_admin_email'])) : null;

        isset($_POST['wps_daily_report_sms']) && !empty($_POST['wps_daily_report_sms']) ?
            update_option('wps_daily_report_sms',strip_tags($_POST['wps_daily_report_sms'])):null;
    }
    $wps_enable_enable = intval(get_option('wps_enable'));
    $wps_admin_email = get_option('wps_admin_email');
    $wps_daily_report_sms = get_option('wps_daily_report_sms');

    include WPS_TPL . "admin_setting_page.php";
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

    add_submenu_page(
        'wps/wps-stat.php',
        'داشبورد',
        'داشبورد',
        'manage_options',
        'wps/wps-stat.php',
        'wps_admin_menu',

    );
    add_submenu_page(
        'wps/wps-stat.php',
        'تنظیمات',
        'تنظیمات',
        'manage_options',
        'wps/wps-settings.php',
        'wps_admin_menu_settings',

    );

    wps_load_assets();
}

add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

//define load asset
function wps_load_assets()
{
    wp_register_script('chart.min.js', WPS_JS . 'chart.min.js', array('jquery'));
    wp_register_script('wps.admin.js', WPS_JS . 'admin.js', array('jquery', 'chart.min.js'));

    wp_enqueue_script('chart.min.js');
    wp_enqueue_script('wps.admin.js');
}