<!DOCTYPE html>
<?php
  include "../config/connection.php";
    session_start();
      if (empty($_SESSION['username'])){
        header("Location:../login.php");
      }else{
          if ($_SESSION['username']) {
      #      echo "Log in as ".$_SESSION['username'];
          }else {
            header("Location:../login.php");
          }
      }
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload Product</title>
  </head>
  <body><center><tt>
    <form class="" action="../config/insert-product.php" method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Product Name</td>
          <td>:</td>
          <td>
            <input class="hmm" type="text" name="product-name" placeholder="Product Name" required />
          </td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td>:</td>
          <td>
            <input class="hmm" type="number" name="product-quantity" min="1" placeholder="1" required />
          </td>
        </tr>
        <tr>
          <td>Price</td>
          <td>:</td>
          <td>
            IDR. <input class="hmm" type="number" name="product-price" min="0" placeholder="10000" required />
          </td>
        </tr>
        <tr>
          <td>Description</td>
          <td>:</td>
          <td>
            <textarea class="hmm" name="product-description" rows="8" cols="80"></textarea>
          </td>
        </tr>
        <tr>
          <td>Image</td>
          <td>:</td>
          <td>
            <input class="hmm" type="file" name="product-image" accept="image/*" required />
          </td>
        </tr>
        <tr>
          <td>Seller</td>
          <td>:</td>
          <td>
            <?php
              require '../config/connection.php';
              $selectstore = mysqli_query($connection, "SELECT user_shopname FROM user WHERE (`user_username` LIKE '%".$_SESSION['username']."%')");
              if ($selectstore) {
                while ($row = mysqli_fetch_assoc($selectstore)) {
              ?>
                <input class="hmm" type="text" name="product-seller" value="<?php echo $row['user_shopname'];?>" readonly />
              <?php
                }
              }
             ?>
          </td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td>
            <input class="btn btn-success" type="submit" name="submit" value="UPLOAD">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
