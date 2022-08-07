<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

//remove tables from database
global $wpdb;
$wps_user_visits_tbl_prefix=$wpdb->prefix.'wps_user_visits';
$wps_visits_tbl_prefix=$wpdb->prefix.'wps_visits';
$wpdb->query("DROP TABLE IF EXISTS {$wps_user_visits_tbl_prefix}");
$wpdb->query("DROP TABLE IF EXISTS {$wps_visits_tbl_prefix}");

//remove options from database
delete_option('wps_options');
delete_option('wps_db_version');