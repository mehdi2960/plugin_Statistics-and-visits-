<?php

function wps_user_visit_callback()
{
    global $wpdb,$table_prefix;
    $user_ip=ip2long($_SERVER['REMOTE_ADDR']);
    $date=date('Y-m-d H:i:s');

    //رکوردی برای امروز ثبت شده یا نه
    $is_user_visit_site_today=$wpdb->get_var("SELECT id FROM {$table_prefix}wps_user_visits
                                                    WHERE ip={$user_ip} AND DATE('{$date}')=DATE($date) LIMIT 1");
    if (intval($is_user_visit_site_today==0))
    {
        $wpdb->insert($table_prefix.'wps_user_visits', array('ip'=>$user_ip,'date'=>$date),array('%d','$s'));
        $wpdb->insert_id;
    }

     //رکوردی برای برای wps_visits وجود دارد یا نه
    $today_visists_exist=$wpdb->get_var("SELECT id FROM {$table_prefix}wps_visits WHERE DATE('{$date}')=date");

    if ($today_visists_exist){
       $wpdb->query("UPDATE {$table_prefix}wps_visits SET totla_visits=totla_visits+1 WHRER id={$today_visists_exist}");
    }else{

    }


}
add_action('wps_user_visit','wps_user_visit_callback');