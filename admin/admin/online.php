<?php
session_start();
function _alert_to($info) {
	echo "<script type='text/javascript'>alert('".$info."');location.href='login.php'; </script>";
	exit();
};
@$user=$_SESSION["username"];
if(!$user){
	 _alert_to('请先登录');
}
$username=$_SESSION["username"];
?>