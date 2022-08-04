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
define('WPS_CSS',trailingslashit(WPS_URL.'assets'.'/'.'css'));
define('WPS_JS',trailingslashit(WPS_URL.'assets'.'/'.'js'));
define('WPS_IMAGES',trailingslashit(WPS_URL.'assets'.'/'.'images'));
define('WPS_FONTS',trailingslashit(WPS_URL.'assets'.'/'.'fonts'));

//write activation and deactivation hooks callback
function wps_activate(){}
function wps_deactivate(){}

register_activation_hook(__FILE__,'wps_activate');
register_deactivation_hook(__FILE__,'wps_deactivate');

