<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Date Time 
    <hr>
    <?php 
    //can find date format in php
    date_default_timezone_set("Asia/Yangon"); //your time zone
    echo date('D-F-d-m-Y h:i:a'); //produce current time
    echo "<br>";
    $cur_date=date_create(date('d-m-Y'));
    date_add($cur_date, date_interval_create_from_date_string('10 days'));
    echo date_format($cur_date,'d-m-Y');
    echo "<br>";
    $cu_date=date_create(date('d-m-Y'));
    date_sub($cu_date, date_interval_create_from_date_string('10 days'));
    echo date_format($cu_date,'d-m-Y');
    echo "<br>";
    echo cal_days_in_month(CAL_GREGORIAN,date("m"),date("Y"));
    ?>
</body>
</html>