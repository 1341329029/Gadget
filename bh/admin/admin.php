<?php
include("pdo.php");
		$in = $_POST["user"];
		$result = json_decode($in);
  		$username = $result->username;
    	$password = $result->password;
    	if ($username) {
    		$test = new DBPDO;
		    $sql = "select * from bn_jsjkxjs where username ='$username'";
		    $rs = $test->select($sql);
		    if (!$rs) {
		    	echo 1;//不正确返回nameerror  
		    }elseif($rs[0]['password']!=$password){
		    	echo 2 ;//不正确返回passerror
		    }elseif(!$rs[0]['oppenid']){
		    	echo 3;
		    	session_start();
				$_SESSION['username']=$username;
		    }else{
		    	echo 0;
		    	session_start();
				$_SESSION['username']=$username;
		    }
    	}
    	
		
 

     
      


?>