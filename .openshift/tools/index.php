<?php
// 随机命名管理页
$str = "0123456789abcdefghijklmnopqrstuvwxyz";//输出字符集
$n = 5;//输出串长度
$len = strlen($str)-1;
for($i=0 ; $i<$n; $i++){
        $s .= $str[rand(0,$len)];
}
rename(getenv('OPENSHIFT_REPO_DIR').'manager.php',getenv('OPENSHIFT_REPO_DIR').$s.'.php');
// 显示欢迎页
$welcome_page =<<<index
<!doctype html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>安装成功</title>
<link rel="stylesheet" type="text/css" href="main.css">
<!--[if lt IE 9]>
  <script src="http://puteulanus.u.qiniudn.com/html5.js"></script>
<![endif]-->
</head>
<body>
<div id="wrapper">
  <div id="main">
    <header id="header">
      <h1><span class="icon">!</span>安装成功<span class="sub">撒花</span></h1>
    </header>
    <div id="content">
      <h2>请牢记这个页面的信息！</h2>
        <p>管理签到用户的地址是：
index;
$manage_url = 'https://'.getenv('OPENSHIFT_APP_DNS').'/'.$s.'.php';
$welcome_page .= '<a href="'.$manage_url.'">'.$manage_url.'</a>';
$welcome_page .=<<<index2
<br><font color="#FF0000">请记下这个地址，一旦此页面被关闭它不会再出现</font></br>使用方法：</br>参数type指定操作类型，可以是add【增加用户】或者del【删除用户】</br>type为add时可以用参数username和password指定用户名密码，程序会自动获取cookie加入用户列表，也可以用参数userauth和usersha1指定cookie的两个关键片段，直接加入用户。</br>参数type为del时需要带有参数id来指明需要删除的用户的id。</br>不加参数访问为查看用户列表，删除用户需要的用户ID可以在这里获得。</br>示例：增加一个用户名为admin，密码为default的用户，只需要访问：</br>https://管理地址?type=add&username=admin&passwprd=default</p>
    </div>
  </div>
</div>
</html>
index2;
echo $welcome_page;
// 删除欢迎页
unlink('main.css');
unlink('index.php');
?>