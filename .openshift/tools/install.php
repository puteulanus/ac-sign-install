<?php
// 连接数据库
$lk = mysql_connect(getenv('OPENSHIFT_MYSQL_DB_HOST').':'.getenv('OPENSHIFT_MYSQL_DB_PORT'),getenv('OPENSHIFT_MYSQL_DB_USERNAME'),getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
if (!$lk){
    die('Could not connect: ' . mysql_error());
}
mysql_select_db(getenv('OPENSHIFT_APP_NAME'), $lk);
// 导入初始化SQL
mysql_query(file_get_contents('acfun.sql'));
mysql_close($lk);
?>