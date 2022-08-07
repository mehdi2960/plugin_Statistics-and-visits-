<?php
/*
 * Plugin Name: آمار بازدید کاربران
 * Plugin URI: https://wp.div
 * Description: پلاگین قدرتمند برای دریافت بازدید کاربران از سایت وردپرسی
 * Author: mehdi mousavi
 *  Version: 1.0.0
 */

// پلاگین بصورت مستقیم فایلش اجرا نشود
defined('ABSPATH') || exit();

//define constants
define('WPS_DIR',trailingslashit(plugin_dir_path(__FILE__)));
define('WPS_URL',trailingslashit(plugin_dir_url(__FILE__)));
define('WPS_INC',trailingslashit(WPS_DIR.'inc'));
define('WPS_TPL',trailingslashit(WPS_DIR.'tpl'));
define('WPS_CSS',trailingslashit(WPS_URL.'assets'.'/'.'css'));
define('WPS_JS',trailingslashit(WPS_URL.'assets'.'/'.'js'));
define('WPS_IMAGES',trailingslashit(WPS_URL.'assets'.'/'.'images'));
define('WPS_FONTS',trailingslashit(WPS_URL.'assets'.'/'.'fonts'));

define('WPS_DB_VERSION',1);

//write activation and deactivation hooks callback
add_filter( 'cron_schedules', 'wps_add_weekly_cron_schedule' );
function wps_add_weekly_cron_schedule( $schedules ) {
    $schedules['weekly'] = array(
        'interval' => 604800,
        'display' => __('Once Weekly')
    );
    return $schedules;
}

function wps_activate(){
    if (! wp_next_scheduled ( 'wps_notify' )) {
        wp_schedule_event( strtotime(date('Y-m-d 22:00:00')), 'weekly', 'wps_notify' );
    }

    include WPS_INC.'upgrade.php';
}
function wps_deactivate()
{
    wp_clear_scheduled_hook('wps_notify');
}

register_activation_hook(__FILE__,'wps_activate');
register_deactivation_hook(__FILE__,'wps_deactivate');


if (is_admin()){
    include WPS_INC."backend.php";
}else{
    include WPS_INC."frontend.php";
}