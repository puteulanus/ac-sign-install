<?
header("Content-type:text/html;charset=utf-8");
$type = $_GET['type'];
if ($type == 'add'){
	$username = $_GET['username'];// ACFun用户名
	$password = $_GET['password'];// ACFun密码
	$userauth = $_GET['auth'];// ACfun的cookie片段
	$usersha1 = $_GET['sha1'];// ACfun的cookie片段
	if ($userauth and $usersha1){
		$Useauth = True;
	}elseif ($username and $password) {
		$Useauth = False;
	}else{
		echo '错误的参数！';
		exit;
	}
	$step = 1;
}elseif ($type == 'del') {
	$userid = $_GET['id'];// 要删除的用户ID
	if (!$userid) {
		echo '错误的参数！';
		exit;
	}
	$step = 2;
}
// 连接数据库
$lk = mysql_connect(getenv('OPENSHIFT_MYSQL_DB_HOST').':'.getenv('OPENSHIFT_MYSQL_DB_PORT'),getenv('OPENSHIFT_MYSQL_DB_USERNAME'),getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
if (!$lk){
    die('Could not connect: ' . mysql_error());
}
mysql_select_db(getenv('OPENSHIFT_APP_NAME'), $lk);

switch ($step)
{
case 1:
	if ($Useauth){
		mysql_query("INSERT INTO acfun_cookie (last_sign,auth,sha1) VALUES ('2014-08-28',".$userauth.",".$usersha1.")");
		echo '添加了Auth为'.$userauth.'的用户';
		break;
	}
	// 模拟登陆获取cookie
	$url = 'http://www.acfun.tv/login.aspx';
	$data = 'username='.$username.'&password='.$password;
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_HEADER,1);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_REFERER,'http://www.acfun.tv/');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	$content = curl_exec($ch);
	curl_close($ch);
	preg_match_all('/Set-Cookie:(.*;)/iU',$content,$str);
	foreach ($str[1] as $key) {
	        if (strpos($key,'deleted') == false){
	        $cookie .= $key;
	}
	}
	# 获取签到所需参数
	preg_match('/auth_key=(\w+?);/',$cookie,$auth_key);
	preg_match('/auth_key_ac_sha1=(\w+?);/',$cookie,$auth_key_ac_sha1);
	$auth_key = $auth_key[1];
	$auth_key_ac_sha1 = $auth_key_ac_sha1[1];
	# 加入数据库
	mysql_query("INSERT INTO acfun_cookie (last_sign,auth,sha1) VALUES ('2014-08-28',".$auth_key.",".$auth_key_ac_sha1.")");
	echo '添加了Auth为'.$auth_key.'的用户';
	break;

case 2:
	# 删除指定用户
	mysql_query("DELETE FROM acfun_cookie WHERE id = ".$userid);
	echo '删除了ID为'.$userid.'的用户';
	break;
default:
	# 显示所有用户
	$Nouser = True;
	$result = mysql_query("SELECT * FROM acfun_cookie");
	while($row = mysql_fetch_array($result)){
	        echo 'ID:'.$row['id'].'&nbsp;&nbsp;'.'Auth:'.$row['auth'].'&nbsp;&nbsp;'.'上次签到:'.$row['last_sign'].'</br>';
			$Nouser = False;
	}
	if ($Nouser){
		echo '没用用户';
	}
	break;

}

mysql_close($lk);
?>