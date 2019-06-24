<?php
session_start();
  if (empty($_SESSION['username'])){
    header("Location:../login.php");
  }else{
      if ($_SESSION['username']) {
    #    echo "Log in as ".$_SESSION['username'];
      }else {
        header("Location:../login.php");
      }
  }
require_once './connection.php';
  date_default_timezone_set('Asia/Jakarta');
  $pn = strtoupper($_POST['product-name']);
  $pq = $_POST['product-quantity'];
  $pp = $_POST['product-price'];
  $pd = $_POST['product-description'];
  $pg = $_POST['product-category'];
  $ps = $_POST['product-seller'];
  $pi  = $_FILES['product-image']['name'];
  $target_dir = "../img/product/";
  $target_file = $target_dir . basename($_FILES["product-image"]["name"]);
  $uploadOK = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  //check real or fake image
  if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["product-image"]["tmp_name"]);
    if ($check !== false) {
#      echo "File is an image - " . $check["mime"] . ".";
      $uploadOK = 1;
    }else {
#      echo "File isn't an image.";
      $uploadOK = 0;
    }
    //allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
      echo '<tt>'."Sorry, only: JPG, PNG, JPEG, and GIF files are allowed.";
      header("refresh:1.5 ; ../seller");
      $uploadOK = 0;
    }
    //check if $uploadOK is set to 0 by an error
    if ($uploadOK == 0) {
      echo '<tt>'."Sorry, ur file was not uploaded.";
      header("refresh:1.5 ; ../seller");
    }else{
      $inpro = mysqli_query($connection, "INSERT INTO product (product_name, product_quantity, product_price, product_description, product_image, product_category, product_seller, product_uptime) VALUES ('$pn','$pq','$pp','$pd','$pi','$pg','$ps',now())");
      mysqli_close($connection);
      if ($inpro && move_uploaded_file($_FILES["product-image"]["tmp_name"], $target_file)) {
          echo '<tt>'."Data has been uploaded.";
          header("refresh:1.5 ; ../seller");
      }else{
          echo '<tt>'."Something Error";
          header("refresh:2 ; ../seller");
      }
    }
  }
 ?>
