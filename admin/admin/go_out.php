<?php
if(@$_GET['action'] == "logout"){
    unset($_SESSION['username']);
    header("location:login.php");
  }
?>