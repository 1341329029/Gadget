<?php
//scope=snsapi_base 实例
$appid='wx03c2058c2cfe8fd8';
$redirect_uri = urlencode ( 'http://139.199.35.66/getUserInfo.php' );
$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
header("Location:".$url);

?>