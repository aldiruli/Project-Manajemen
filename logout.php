<?php
 session_start();
 session_destroy();
 echo '<tt>'."See u soon ".$_SESSION['username'].'</tt>';
 header("refresh:1, login.php");
 ?>
