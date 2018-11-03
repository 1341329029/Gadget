<?php
include_once '../includes/global.func.php';
include_once '../conn/pdo.php';
session_start();
if(isset($_POST['submit'])){
	$username = $_POST['username'];
    $password = $_POST['pwd'];
    $test = new DBPDO;  
    $sql = "SELECT * FROM `user` WHERE `username`='$username' ";
    $rs = $test->select($sql);
    if ($_POST['username']=''||$_POST['pwd']='') {
        _alert_back('用户和密码不能为空');
    }
    if(strlen($username)>12||strlen($password) < 5){
      _alert_back('用户名或密码不合法');
    }
   //isset()检测变量是否设置
     if (!$rs){
     _alert_back('用户名不存在');
    }
    if($rs[0]['password']==$password){
      $_SESSION["username"]=$username;
     _alert_go("登录成功");
    }
    else{
 	 _alert_back('密码错误');
    }

}

?>