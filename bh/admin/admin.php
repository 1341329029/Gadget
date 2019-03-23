<?php
include("pdo.php");
include("check.php");
			$in = $_POST["user"];
			$result = json_decode($in);
	  		$username = $result->username;
	    	$password = $result->password;
	    	$password=md5($password);
	    	if ($username) {
	    		$ade=new Findwhere();
	    		$table=$ade->First($username);
	    		if($table){
		    		$test = new DBPDO;
				    $sql = "select * from $table where username ='$username'";
				    $rs = $test->select($sql);
				    if (!$rs) {
				    	echo 1;//不正确返回nameerror
				    }elseif($rs[0]['password']!=$password){
				    	echo 2 ;//不正确返回passerror
				    }elseif($rs[0]['oppenid']){
				    	echo 0;
				    	session_start();
						$_SESSION['username']=$username;
				    }else{
				    	echo 3;
				    	session_start();
						$_SESSION['username']=$username;
				    }
				}else{
					echo 1;
				}
	    	}
?>