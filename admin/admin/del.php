      
<?php
include_once '../conn/pdo.php';
$id = $_GET['id'];
$test = new DBPDO;       
$sql = "delete from works where id=$id";       
$rs = $test->select($sql);
?>
<?php
//页面跳转，实现方式为javascript 
$url = "../design.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
//使用js页面跳转回list查看文件的页面
?> 
