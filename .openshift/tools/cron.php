<?php
header("Content-type:text/html;charset=utf-8");
// 这个Cron不会执行签到，仅作外部Cron访问用
$str = file_get_contents('http://api.hitokoto.us/rand');
$pattern = '/'.preg_quote('"hitokoto":"','/').'(.*?)'.preg_quote('",','/').'/i';
preg_match ($pattern,$str, $result);
echo $result[1];
?>