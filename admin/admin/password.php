<?php
include_once '../includes/global.func.php';
include_once '../conn/pdo.php';
session_start();
$username=$_SESSION["username"];
if(isset($_POST['submit'])){
	  $pwd2 = $_POST['pwd2'];
    $pwd3 = $_POST['pwd3'];
    if (!$pwd2==$pwd3) {
     _alert_back('密码输入不一致');
    }
     if(strlen($pwd2) < 5){
      _alert_back('密码不合法');
    }
    $test = new DBPDO; 
    $sql ="UPDATE `user` SET password='{$pwd2}' WHERE`username`='$username'";  
    $rs = $test->update($sql);
    if ($rs) {
           _alert_eo("修改成功");
      unset($_SESSION['username']);
    }

}

?>