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
        echo "--".$seller."--";
      }
    }

  $myrequest = mysqli_query($connection, "SELECT * FROM request WHERE `product_seller` = '$seller' ORDER BY 1 DESC");

  if ($myrequest) {
    // output data of each row
    echo '<div class="table-responsive">';
    echo '<br />'.'<table class="table table-hover">';
    echo '<thead>';
    echo '<tr>';
    echo '<td>'."ID".'</td>';
    echo '<td>'."PRODUCT NAME".'</td>';
    echo '<td>'."QUANTITY".'</td>';
    echo '<td>'."TOTAL PRICE".'</td>';
    echo '<td>'."NAME".'</td>';
    echo '<td>'."PHONE".'</td>';
    echo '<td>'."ADDRESS".'</td>';
    echo '<td>'."SUB-DISTRICT".'</td>';
    echo '<td>'."CITY".'</td>';
    echo '<td>'."PROVINCE".'</td>';
    echo '<td>'."COUNTRY".'</td>';
    echo '<td>'."POSTAL CODE".'</td>';
    echo '<td>'."TIME ORDER".'</td>';
    echo '</tr>';
    echo '<thead>';
    while($row = mysqli_fetch_assoc($myrequest)) {
      echo '<tbody>';
      echo '<tr>';
      echo '<td>'.$row["request_id"].'</td>';
      echo '<td>'.$row["request_productname"].'</td>';
      echo '<td>'.$row["request_quantity"].'</td>';
      echo '<td>'.$row["request_totalprice"].'</td>';
      echo '<td>'.$row["request_buyername"].'</td>';
      echo '<td>'.$row["request_buyerphone"].'</td>';
      echo '<td>'.$row["request_buyeraddress"].'</td>';
      echo '<td>'.$row["request_buyersubdis"].'</td>';
      echo '<td>'.$row["request_buyercity"].'</td>';
      echo '<td>'.$row["request_buyerprovince"].'</td>';
      echo '<td>'.$row["request_buyercountry"].'</td>';
      echo '<td>'.$row["request_buyerpostalcode"].'</td>';
      echo '<td>'.$row["request_time"].'</td>';
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
