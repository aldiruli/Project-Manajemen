<?php
  if (isset($_POST['submit'])) {
      require_once './connection.php';
      date_default_timezone_set('Asia/Jakarta');

      $name     = strtoupper($_POST['name']);
      $uname    = $_POST['username'];
      $pwd      = $_POST['password'];
      $phone    = $_POST['phone'];
      $shopname = strtoupper($_POST['shopname']);
      $bank     = $_POST['bank'];
      $accbank  = $_POST['accbank'];

      $sel = mysqli_query($connection,"SELECT user_username FROM user WHERE user_username='$uname'");
      $selc = mysqli_num_rows($sel);

      if ($selc != TRUE) {
        $instusr = mysqli_query($connection, "INSERT INTO user (user_name,user_username,user_pwd,user_phone,user_shopname,user_bank,user_accountbank,user_uptime) VALUES ('$name','$uname','$pwd','$phone','$shopname','$bank','$accbank',now())");
        if ($instusr) {
          echo $uname." has been registered.".'<br />';
          header("refresh:2 , ../login.php");
        }else {
          echo "bad logic";
        }
        mysqli_close($connection);
      }else {
        echo '<br />'."Username: ".$uname." is already exists.".'<br />';
        header("refresh:2 , ../signup.php");
      }
  }else {
    header("Location: ../login.php");
  }
 ?>
