<?php
include_once '../includes/global.func.php';
include_once '../conn/pdo.php';
if(isset($_POST['submit'])){
	$colId =$_POST['colId'];
	$title =$_POST['title'];
	$author =$_POST['author'];
    $content =$_POST['content'];
    $img = $_FILES["file"]["name"];
    // if ($colId||$title||$author||$content) {
    //  		 _alert_back('请完整填写信息');
    //  	} 
    if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg"))&& ($_FILES["file"]["size"] < 20000)){
            alert_back('图片格式错误');
    }else{
	 $srcname = "../thumbnail/".$_FILES["file"]["name"];
     if(move_uploaded_file($_FILES["file"]["tmp_name"], $srcname)){
      $test = new DBPDO;  

      $sql ="INSERT into works (type,title,author,image,content) values('$colId','$title','$author','$img','$content' )";
      
            $rs = $test->insert($sql); 

      if ($rs) {
        _alert_back('上传成功');
       }
     } else{
       _alert_back('上传失败');
      }                       
     }
      
    }
	
?>
