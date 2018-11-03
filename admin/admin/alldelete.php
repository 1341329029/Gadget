<?php
include_once '../conn/pdo.php';
$value = $_POST['id']; 
if (!$value) {
$url = "../design.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
}
else{
for ($i=0; $i <count($value) ; $i++) { 
	$test = new DBPDO;       
    $sql = "delete from works where id=$value[$i]";       
    $rs = $test->select($sql);
}
$url = "../design.php";
echo "<script>";
echo "window.location.href='$url'";
echo "</script>";
}

?> 