<?php
	Class Findwhere{
		function First($username)
		{
			if(strlen($username)>=10){
				return $this->Findstudent($username);
			}elseif (strlen($username)==8) {
				return $this->Findteacher($username);
			}
		}
		function Findstudent($username){
			$number=substr($username, -12,6);
			$test = new DBPDO;
		    $sql = "select * from bh where bh_number ='$number'";
		    $rse = $test->select($sql);
		    if ($rse) {
		    	return $rse[0]['bh_name'];
		    }else{
		    	return false;
		    }

		}
		function Findteacher($username){
			return 'bn_teach';
		}
	}
?>