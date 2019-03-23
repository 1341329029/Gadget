<?php
//scope=snsapi_base 实例
$appid = "wxf88d880d23e89087";
$redirect_uri = urlencode ( 'http://sdp.dw167.com/bh/admin/getUserInfo2.php' );
$url ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appid&redirect_uri=$redirect_uri&response_type=code&scope=snsapi_base&state=1#wechat_redirect";
header("Location:".$url);

?>