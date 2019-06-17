<?php
require_once './config/connection.php';
$buy=$_GET['buy'];
$p=mysqli_query($connection,"SELECT * FROM product where id_product ='$buy'");

while ($data=mysqli_fetch_assoc($p)) { ?>

<form class="" action="" method="post">
<input type="text" name="product_name" value="<?php echo $data ['product_name']?>" readonly>
<input type="text" name="product_quantity" placeholder="1">
<input type="text" name="product_price" value="<?php echo $data ['product_price']?>"readonly>
<input type="text" name="product_description" value="<?php echo $data ['product_description']?>"readonly>
<input type="text" name="product_image" value="<?php echo $data ['product_image']?>"readonly>
<input type="text" name="product_seller" value="<?php echo $data ['product_seller']?>" readonly>
<input type="submit" name="Simpan" value="Simpan">
 <?php } ?>
