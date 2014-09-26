<?php
// 随机命名管理页
$str = "0123456789abcdefghijklmnopqrstuvwxyz";//输出字符集
$n = 5;//输出串长度
$len = strlen($str)-1;
for($i=0 ; $i<$n; $i++){
        $s .= $str[rand(0,$len)];
}
rename(getenv('OPENSHIFT_REPO_DIR').'manage.php',getenv('OPENSHIFT_REPO_DIR').$s.'.php');
// 显示欢迎页
$welcome_page =<<<index
<!doctype html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>安装成功</title>
<style type="text/css">
html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
}
html { height: 100%; } /* always display scrollbars */
body { height: 100%; font-size: 62.5%; line-height: 1; font-family: Arial, Tahoma, Verdana, sans-serif; }

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong { font-weight: bold }
input { outline: none }
table {
    border-collapse: collapse;
    border-spacing: 0;
}
img {
    border: 0;
    max-width: 100%;
}
a { text-decoration: none }
a:hover { text-decoration: underline }
.clear { clear: both }
.clear:before,
.container:after {
    content: "";
    display: table;
}
.clear:after { clear: both }
/* IE 6/7 */
.clear { zoom: 1 }
body {
    background: #dfdfdf url(http://ww3.sinaimg.cn/large/9c5f9488gw1ekpol0kevyj20e80e8gnw.jpg) repeat;
    font-family: Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    overflow: hidden;
}
@font-face {
    font-family: 'TeXGyreScholaRegular';
    src: url('texgyreschola-regular-webfont.eot');
    src: url('texgyreschola-regular-webfont.eot?#iefix') format('embedded-opentype'),
    url('texgyreschola-regular-webfont.woff') format('woff'),
    url('texgyreschola-regular-webfont.ttf') format('truetype'),
    url('texgyreschola-regular-webfont.svg#TeXGyreScholaRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'TeXGyreScholaBold';
    src: url('texgyreschola-bold-webfont.eot');
    src: url('texgyreschola-bold-webfont.eot?#iefix') format('embedded-opentype'),
    url('texgyreschola-bold-webfont.woff') format('woff'),
    url('texgyreschola-bold-webfont.ttf') format('truetype'),
    url('texgyreschola-bold-webfont.svg#TeXGyreScholaBold') format('svg');
    font-weight: normal;
    font-style: normal;

}
@-webkit-keyframes main { 
  0% {
      -webkit-transform: scale3d(0.1, 0.1, 1);
      opacity: 0;
  }
  45% {
      -webkit-transform: scale3d(1.07, 1.07, 1);
      opacity: 1;
  }
  70% { -webkit-transform: scale3d(0.95, 0.95, 1) }
  100% { -webkit-transform: scale3d(1, 1, 1) }
}
@-moz-keyframes main { 
  0% {
      -moz-transform: scale(0.1, 0.1);
      opacity: 0;
  }
  45% {
      -moz-transform: scale(1.07, 1.07);
      opacity: 1;
  }
  70% { -moz-transform: scale(0.95, 0.95) }
  100% { -moz-transform: scale(1, 1) }
}
@-webkit-keyframes logo { 
  0% { opacity: 0 }
  100% { opacity: 1 }
}
@-webkit-keyframes footer { 
  0% { top: -30px }
  100% { top: 0 }
}
.clear { clear: both }
.clear:before,
.container:after {
    content: "";
    display: table;
}
.clear:after { clear: both }
.clear { zoom: 1 }
.left { float: left }
.right { float: right }
#wrapper {
    height: 100%;
    background-image: linear-gradient(bottom, rgba(0,0,0,.0) 0%, rgba(0,0,0,.20) 100%);
    background-image: -o-linear-gradient(bottom, rgba(0,0,0,.0) 0%, rgba(0,0,0,.20) 100%);
    background-image: -moz-linear-gradient(bottom, rgba(0,0,0,.0) 0%, rgba(0,0,0,.20) 100%);
    background-image: -webkit-radial-gradient(rgba(0,0,0,.0) 0%, rgba(0,0,0,.20) 100%);
    background-image: -ms-linear-gradient(bottom, rgba(0,0,0,.0) 0%, rgba(0,0,0,.20) 100%);
}
.logo {
    position: absolute;
    background: url(logo.png);
    width: 200px;
    height: 80px;
    top: 1%;
    left: 1%;
    z-index: 1;
    animation: logo 1.5s 1;
    -webkit-animation: logo 1.5s 1;
    -moz-animation: logo 1.5s 1;
    -o-animation: logo 1.5s 1;
    -ms-animation: logo 1.5s 1;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}
.logo:hover { opacity: .75 !important }
#main {
    position: relative;
    width: 600px;
    margin: 0 auto;
    padding-top: 8%;
    animation: main .8s 1;
    animation-fill-mode: forwards;
    -webkit-animation: main .8s 1;
    -webkit-animation-fill-mode: forwards;
    -moz-animation: main .8s 1;
    -moz-animation-fill-mode: forwards;
    -o-animation: main .8s 1;
    -o-animation-fill-mode: forwards;
    -ms-animation: main .8s 1;
    -ms-animation-fill-mode: forwards;
}
#main #header h1 {
    position: relative;
    display: block;
    font: 72px 'TeXGyreScholaBold', Arial, sans-serif;
    color: #0061a5;
    text-shadow: 2px 2px #f7f7f7;
    text-align: center;
}
#main #header h1 span.sub {
    position: relative;
    font-size: 21px;
    top: -20px;
    padding: 0 10px;
    font-style: italic;
}
#main #header h1 span.icon {
    position: relative;
    display: inline-block;
    top: -6px;
    margin: 0 10px 5px 0;
    background: #0061a5;
    width: 50px;
    height: 50px;
    -moz-box-shadow: 1px 2px white;
    -webkit-box-shadow: 1px 2px white;
    box-shadow: 1px 2px white;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
    color: #dfdfdf;
    font-size: 46px;
    line-height: 48px;
    font-weight: bold;
    text-align: center;
    text-shadow: 0 0;
}
#main #content {
    position: relative;
    width: 600px;
    background: white;
    -moz-box-shadow: 0 0 0 3px #ededed inset, 0 0 0 1px #a2a2a2, 0 0 20px rgba(0,0,0,.15);
    -webkit-box-shadow: 0 0 0 3px #ededed inset, 0 0 0 1px #a2a2a2, 0 0 20px rgba(0,0,0,.15);
    box-shadow: 0 0 0 3px #ededed inset, 0 0 0 1px #a2a2a2, 0 0 20px rgba(0,0,0,.15);
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    z-index: 5;
}
#main #content h2 {
    background: url(http://ww2.sinaimg.cn/large/9c5f9488gw1ekpomuu5bej20gi00a0ov.jpg) no-repeat;
    background-position: bottom;
    padding: 12px 0 22px 0;
    font: 20px 'TeXGyreScholaRegular', Arial, sans-serif;
    color: #8e8e8e;
    text-align: center;
}
#main #content p {
    position: relative;
    padding: 20px;
    font-size: 13px;
    line-height: 25px;
    color: #000000;
}
#main #content .utilities { padding: 20px }
#main #content .utilities form .input-container {
    position: relative;
    width: 290px;
}
#main #content .utilities form .input-container input[type=text] {
    width: 280px;
    height: 34px;
    padding: 0 8px;
    background: white;
    border: solid 1px #cdcdcd;
    outline: none;
    -moz-box-shadow: 0 3px 3px rgba(0,0,0,.05) inset;
    -webkit-box-shadow: 0 3px 3px rgba(0,0,0,.05) inset;
    box-shadow: 0 3px 3px rgba(0,0,0,.05) inset;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 14px;
    color: #696969;
    -webkit-font-smoothing: antialiased;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}
#main #content .utilities .input-container input[type=text]:focus { border: solid 1px #9f9f9f }
#main #content .utilities form  .input-container button#search {
    position: absolute;
    display: block;
    top: 9px;
    right: 0;
    background: white url(404_search.png) no-repeat;
    width: 18px;
    height: 18px;
    border: none;
    cursor: pointer;
    opacity: .3;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}
#main #content .utilities form  .input-container button#search:hover { opacity: .6 }
#main #content .utilities .button {
    display: inline-block;
    height: 34px;
    margin: 0 0 0 6px;
    padding: 0 18px;
    background: #006db0;
    background-image: linear-gradient(bottom, #0062a6 0%, #0079bb 100%);
    background-image: -o-linear-gradient(bottom, #0062a6 0%, #0079bb 100%);
    background-image: -moz-linear-gradient(bottom, #0062a6 0%, #0079bb 100%);
    background-image: -webkit-linear-gradient(bottom, #0062a6 0%, #0079bb 100%);
    background-image: -ms-linear-gradient(bottom, #0062a6 0%, #0079bb 100%);
    -moz-box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00acd8 inset;
    -webkit-box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00acd8 inset;
    box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00acd8 inset;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 14px;
    line-height: 34px;
    color: white;
    font-weight: bold;
    text-shadow: 0 -1px #00385a;
    text-decoration: none;
}
#main #content .utilities .button:hover {
    background: #0081c6;
    background-image: linear-gradient(bottom, #006fbb 0%, #008dce 100%);
    background-image: -o-linear-gradient(bottom, #006fbb 0%, #008dce 100%);
    background-image: -moz-linear-gradient(bottom, #006fbb 0%, #008dce 100%);
    background-image: -webkit-linear-gradient(bottom, #006fbb 0%, #008dce 100%);
    background-image: -ms-linear-gradient(bottom, #006fbb 0%, #008dce 100%);
    -moz-box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00c1e4 inset;
    -webkit-box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00c1e4 inset;
    box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00c1e4 inset;
}
#main #content .utilities .button:active {
    background: #0081c6;
    background-image: linear-gradient(bottom, #008dce 0%, #006fbb 100%);
    background-image: -o-linear-gradient(bottom, #008dce 0%, #006fbb 100%);
    background-image: -moz-linear-gradient(bottom, #008dce 0%, #006fbb 100%);
    background-image: -webkit-linear-gradient(bottom, #008dce 0%, #006fbb 100%);
    background-image: -ms-linear-gradient(bottom, #008dce 0%, #006fbb 100%);
    -moz-box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00c1e4 inset;
    -webkit-box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00c1e4 inset;
    box-shadow: 0 0 0 1px #003255, 0 1px 3px rgba(0, 50, 85, 0.5), 0 1px #00c1e4 inset;
}
#main #content .utilities .button-container .button:focus { color: black }
#main #footer {
    position: relative;
    top: -30px;
    padding: 5px 0;
    text-align: center;
    z-index: 1;
    animation: footer .4s .8s 1;
    animation-fill-mode: forwards;
    -webkit-animation: footer .4s .8s 1;
    -webkit-animation-fill-mode: forwards;
    -moz-animation: footer .4s .8s 1;
    -moz-animation-fill-mode: forwards;
    -o-animation: footer .4s .8s 1;
    -o-animation-fill-mode: forwards;
    -ms-animation: footer .4s .8s 1;
    -ms-animation-fill-mode: forwards;
}
#main #footer ul {
    font: 13px 'TeXGyreScholaRegular', Arial, sans-serif;
    text-shadow: 0 1px white;
}
#main #footer ul li {
    display: inline;
    margin: 0 12px;
}
#main #footer ul li a {
    font: 13px 'TeXGyreScholaRegular', Arial, sans-serif;
    color: #696969;
    text-shadow: 0 1px white;
    text-decoration: none;
}
#main #footer ul li a:hover {
    color: #0061a5;
    text-decoration: underline;
}
</style>
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
unlink('index.php');
rename(getenv('OPENSHIFT_REPO_DIR').'cron.php',getenv('OPENSHIFT_REPO_DIR').'index.php');
?>