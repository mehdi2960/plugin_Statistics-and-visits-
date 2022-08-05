<table class="form-table">
    <tr valign="top">
        <th scope="row">
            <label for="wps_enable">فعال بودن افزونه</label>
        </th>
        <td>
            <input type="checkbox" id="wps_enable" name="wps_enable" <?php checked(1,$wps_enable_enable);?>>
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">
            <label for="wps_admin_email">ایمیل مدیر سایت : </label>
        </th>
        <td>
            <input type="email" id="wps_admin_email" name="wps_admin_email" value="<?php echo $wps_admin_email;?>">
        </td>
    </tr>

    <tr valign="top">
        <th scope="row">
            <label for="wps_admin_mobile">شماره همراه مدیر سایت : </label>
        </th>
        <td>
            <input type="email" id="wps_admin_mobile" name="wps_admin_mobile" value="<?php //echo $wps_admin_mobile;?>">
        </td>
    </tr>
</table>