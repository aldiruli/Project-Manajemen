<?php
  require '../config/connection.php';
  session_start();
    if (empty($_SESSION['username'])){
      header("Location:../login.php");
    }else{
        if ($_SESSION['username']) {
  #        echo "Log in as ".$_SESSION['username'];
        }else {
          header("Location:../login.php");
        }
    }
    $selectstore = mysqli_query($connection, "SELECT user_shopname FROM user WHERE (`user_username` LIKE '%".$_SESSION['username']."%')");
    if ($selectstore) {
      while ($rowy = mysqli_fetch_assoc($selectstore)) {
        $seller = $rowy['user_shopname'];
      }
    }

  $myproduct = mysqli_query($connection, "SELECT * FROM product WHERE `product_seller` = '$seller' ORDER BY 1 DESC");

  if ($myproduct) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."QUANTITY".'</td>';
    echo '<td>'."PRICE".'</td>';
    echo '<td>'."DESCRIPTION".'</td>';
    echo '<td>'."IMAGE".'</td>';
    echo '<td>'."UPTIME".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($row = mysqli_fetch_assoc($myproduct)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$row["id_product"].'</td>';
      echo '<td>'.$row["product_name"].'</td>';
      echo '<td>'.$row["product_quantity"].'</td>';
      echo '<td>'.$row["product_price"].'</td>';
      echo '<td>'.$row["product_description"].'</td>';
      echo '<td>'."<img src='../img/product/".$row['product_image']."'style='width:50%' >".'</td>';
      echo '<td>'.$row["product_uptime"].'</td>';
      echo '</tr>';
      echo '</tbody>';
    }
    echo '</table>';
    echo '</div>';
  }else{
    echo "not selected yet";
  }

  mysqli_close($connection);
 ?>
