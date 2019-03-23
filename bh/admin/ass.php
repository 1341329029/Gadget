<?php
$username="201318050114";
$conn = mysqli_connect("localhost","root","qu6zhi..","bh_user","3306") or die("连接失败");
				if(mysqli_error($conn)){
					echo mysqli_error();
					exit();
				}
				mysqli_query($conn,"set names utf8");
				$sql = "select * from bn_tmyjt where username ='$username' ";
				$result = mysqli_query($conn,$sql);
				var_dump($result);