<?php
session_start();
  if (empty($_SESSION['username'])){
    header("Location:../login.php");
  }else{
      if ($_SESSION['username']) {
        echo "Log in as ".$_SESSION['username'];
      }else {
        header("Location:../login.php");
      }
  }
 ?>
