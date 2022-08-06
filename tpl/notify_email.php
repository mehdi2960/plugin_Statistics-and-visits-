<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ایمیل اطلاع رسانی وب سایت</title>
</head>
<style>
    body {
        background: #f9f9f9;
        margin: 0;
        padding: 0;
        font-size: 100%;
        font-family: Tahoma;
    }

    .wrapper {
        width: 90%;
        background: #ffffff;
        margin: 20px auto;
        border: 1px solid #eaeaea;
        border-radius: 5px;
        text-align: center;
        direction: rtl;
    }

    .content {
        margin: 20px;
    }
</style>
<body>
<div class="wrapper">
    <p>گزارش بازدید روزانه از وب سایت</p>
    <div class="content">
        <p>
            <span>بازدید کل امروز: </span>
            <span>#totalVisits#</span>
        </p>
        <p>
            <span>بازدید unique امروز: </span>
            <span>#uniqueVisits#</span>
        </p>
    </div>
    <?php //$email_content=get_option('wps_daily_report_email');?>
</div>
</body>
</html>
