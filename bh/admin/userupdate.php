<?php
include("pdo.php");
include("check.php");
		$in = $_POST["user"];
		$result = json_decode($in);
  		$username = $result->username;
    	$password = $result->password;
    	$password=md5($password);
    	if ($username) {
    		$test = new DBPDO;
    		$ade=new Findwhere();
	    	$table=$ade->First($username);
	    	if ($table) {
	    		$sql = "select * from $table where username ='$username'";
			    $rs = $test->select($sql);
			    if (!$rs) {
			    	echo 1;//不正确返回nameerror
			    }else{
			    	session_start();
	    			$_SESSION['username']=$username;
	    			$_SESSION['password']=$password;
	    			echo 0 ;
			    	// header('location:index2.php');
			    }
	    	}else{
	    		echo 1;//不正确返回nameerror
	    	}
		   
    	}



?>