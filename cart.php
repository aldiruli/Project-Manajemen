<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
	  <title>CART</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
  </head>
  <body><tt><center><br />
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php
          require_once './config/connection.php';
          $buy=$_GET['buy'];
          $selstore = mysqli_query($connection, "SELECT user_shopname FROM user WHERE (`user_id` LIKE '%".$buy."%')");
          ?>
            <h3>-- CART
              <?php
                while ($rowz = mysqli_fetch_assoc($selstore)) {
                  echo $rowz['user_shopname']." --";
              ?>
              <form class="" action="./checkout.php" method="POST">
                  <input type="text" name="product-shopname" value="<?php echo $rowz['user_shopname']; ?>" readonly hidden />
              <?php
                }
              ?>
            </h3>
          <?php
            $p=mysqli_query($connection,"SELECT * FROM product where id_product ='$buy'");
            while ($row=mysqli_fetch_assoc($p)) {
          ?>
          <br />

            <table>
              <tr>
                <td colspan="3">
                  <center>
                  <input type="text" name="product-id" value="<?php echo $row['id_product']?>" hidden readonly />
                  <input type="text" name="product-name" value="<?php echo $row['product_name']?>" readonly  style="text-align:center"/>
                </td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3">
                  <img class="rounded mx-auto d-block" src="./img/product/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image']?>" style="width:50%;border-radius:10px" draggable="false">
                  <input type="text" name="product-image" value="<?php echo $row['product_image']?>" hidden readonly />
                </td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td>Price</td>
                <td>:</td>
                <td>
                  <input type="text" name="product-price" value="<?php echo $row['product_price'];?>" readonly />
                </td>
              </tr>
              <tr>
                <td>Quantity</td>
                <td>:</td>
                <td>
                  <input type="number" name="product-quantity" placeholder="1" min="1" max="<?php echo $row['product_quantity']; ?>" required />
                </td>
              </tr>
              <tr>
                <td>Recipient's Name</td>
                <td>:</td>
                <td>
                  <input type="text" name="recipient-name" placeholder="Shaza Eilish" required />
                </td>
              </tr>
              <tr>
                <td>Phone Number</td>
                <td>:</td>
                <td>
                  <input type="tel" name="recipient-phone" placeholder="6289751461987" min="0" required />
                </td>
              </tr>
              <tr>
                <td>Address</td>
                <td>:</td>
                <td>
                  <input type="textarea" name="recipient-address" placeholder="Jl. Arif Rahman Hakim" required />
                </td>
              </tr>
              <tr>
                <td>Sub-District</td>
                <td>:</td>
                <td>
                  <input type="text" name="recipient-subdis" placeholder="Sukolilo" required />
                </td>
              </tr>
              <tr>
                <td>City</td>
                <td>:</td>
                <td>
                  <input type="text" name="recipient-city" placeholder="Surabaya" required />
                </td>
              </tr>
              <tr>
                <td>Province</td>
                <td>:</td>
                <td>
                  <input type="text" name="recipient-province" placeholder="East Java" required />
                </td>
              </tr>
              <tr>
                <td>Country</td>
                <td>:</td>
                <td>
                  <input type="text" name="recipient-country" placeholder="Indonesia" required />
                </td>
              </tr>
              <tr>
                <td>Postal Code</td>
                <td>:</td>
                <td>
                  <input type="number" name="recipient-postalcode" pattern="[0-9]*" placeholder="60117" required />
                </td>
              </tr>
              <tr>
                <td colspan="3">&nbsp;</td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <input class="btn btn-success" type="submit" name="submit" value="CHECKOUT">
                  <a href="../Project-Manajemen" class="btn btn-danger">BACK</a>
                </td>
              </tr>
            </table>
          </form>
          <?php
            }
           ?>
        </div>
      </div>
    </div>
    <br />
    <hr width="70%">
     <div class="row" style="margin:0px;">
       <div class="col-sm-12">
         <h6>arminTeam&trade; &copy; 2019</h6>
       </div>
     </div>
  </body>
</html>
