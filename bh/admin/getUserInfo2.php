<?php
include("pdo.php");
include("check.php");
header("content-type:text/html;charset=utf-8");  
$appid = "wxf88d880d23e89087";  
$secret = "1cb718bbe5eb418e96b73403e75c0974";  
$code = $_GET["code"];
 
//第一步:取全局access_token
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret";
$token = getJson($url);
 
//第二步:取得openid
$oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";
$oauth2 = getJson($oauth2Url);
  
//第三步:根据全局access_token和openid查询用户信息  
$access_token = $token["access_token"];  
$openid = $oauth2['openid'];  
$get_user_info_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
$userinfo = getJson($get_user_info_url);
 
//打印用户信息
   function check($userinfo)
  {
    session_start();
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $test = new DBPDO;
    $ade=new Findwhere();
    $table=$ade->First($username);
    if ($table) {
      $sql = "select * from $table where username ='$username'";
      $rse = $test->select($sql);
        if ($rse[0]['oppenid']==$userinfo['openid']) {
          $sql2 = "update $table set password ='$password' where username ='$username' ";
          $rs3 = $test->update($sql2);
          if ($rs3) {
            header('location:../view/login.html');
          }else{
            header('location:../view/sorry2.html');
          }
        }else{
            header('location:../view/sorry.html');
        }
      }else{
        header('location:../view/sorry2.html');
      }
    
  }
check($userinfo);
function getJson($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}
?>