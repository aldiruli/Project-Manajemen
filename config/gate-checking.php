<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>Gate Checking</title>
  </head>
  <body style="background:lavenderblush"><tt>
    <?php
    session_start();
      $uname = $_POST['user_name'];
      $password = $_POST['password'];

      require_once './connection.php';
      $query=mysqli_query($connection,"SELECT * FROM user WHERE user_username='$uname' AND user_pwd='$password'");

      $xxx=mysqli_num_rows($query);
      if($xxx == TRUE){
        while($row = mysqli_fetch_assoc($query)) {
          if ($uname == $row['user_username'] && $password == $row['user_pwd']) {
              $_SESSION['username']=$uname;
              echo "Loading, please wait ...";
              header("refresh:1.5 ; ../seller");
          }else {
            echo "Rejected. U don't have access.";
  #          header("refresh:1.5 ; ../login.php");
          }
        }
      }else{
        echo "Username and Password isn't match.";
        header("refresh:1.5 ; ../login.php");
      }

      mysqli_close($connection);

     ?>
  </body>
</html>
