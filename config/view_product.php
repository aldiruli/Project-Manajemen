<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
require_once 'connection.php';

$d=$_GET['d'];
$barang=mysqli_query($connection,"SELECT * FROM product where id_product ='$d'");

while ($data=mysqli_fetch_array($barang)) {
    echo $data['id_product'];
    echo $data['product_name'];
    echo $data['product_quantity'];
    echo $data['product_price'];
    echo $data['product_description'];
    echo $data['product_image'];
    echo $data['product_seller'];
  }?>
  </body>
</html>
