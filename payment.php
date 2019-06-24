<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='../img/ico-x.png' />
  </head>
  <body><tt><center><br />
    <?php
      if (isset($_POST['submit'])) {
        $product_id           = $_POST['product_id'];
        $product_name         = strtoupper($_POST['product_name']);
        $product_image        = $_POST['product_image'];
        $product_quantity     = $_POST['product_quantity'];
        $product_price        = $_POST['product_price'];
        $product_shop         = $_POST['product_shop'];
        $recipient_name       = strtoupper($_POST['recipient_name']);
        $recipient_phone      = $_POST['recipient_phone'];
        $recipient_address    = strtoupper($_POST['recipient_address']);
        $recipient_subdis     = strtoupper($_POST['recipient_subdis']);
        $recipient_city       = strtoupper($_POST['recipient_city']);
        $recipient_province   = strtoupper($_POST['recipient_province']);
        $recipient_country    = strtoupper($_POST['recipient_country']);
        $recipient_postalcode = $_POST['recipient_postalcode'];

      ?>
      <h3>--PAYMENT--</h3>
      <form class="" action="./config/insert-order.php" method="post">
        <table>
          <tr>
            <td>For Payment</td>
            <td colspan="3">:</td>
          </tr>
          <tr>
            <td>
              <input type="text" name="product_id" value="<?php echo $product_id?>" hidden />
            </td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Store</td>
            <td>:</td>
            <td><?php echo $product_shop;?></td>
            <input type="text" name="product_shop" value="<?php echo $product_shop?>" hidden />
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Product Name</td>
            <td>:</td>
            <td><?php echo $product_name;?></td>
            <input type="text" name="product_name" value="<?php echo $product_name?>" hidden />
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Product Price</td>
            <td>:</td>
            <td>
              <?php echo $product_price;?>
              <input type="text" name="product_price" value="<?php echo $product_price?>" hidden />
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Product Quantity</td>
            <td>:</td>
            <td><?php echo $product_quantity;?></td>
            <input type="text" name="product_quantity" value="<?php echo $product_quantity?>" hidden />
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Total Price</td>
            <td>:</td>
            <td>
              <?php
                $mr = rand(1,100);
                $totalprice = $product_quantity*$product_price+$mr;
                echo "IDR. ".$totalprice;
              ?>
              <input type="text" name="product_totalprice" value="<?php echo $totalprice?>" hidden />
            </td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Transfer to
              <?php
              require './config/connection.php';
              $select_bank = mysqli_query($connection, "SELECT user_bank FROM user WHERE (`user_shopname` LIKE '%".$product_shop."%')");
              if ($select_bank) {
                while ($rowa=mysqli_fetch_assoc($select_bank)) {
                  echo $rowa['user_bank'];
                }
              }
              ?>
            </td>
            <td>:</td>
            <td>
              <?php
              $select_accbank = mysqli_query($connection, "SELECT user_accountbank FROM user WHERE (`user_shopname` LIKE '%".$product_shop."%')");
              if ($select_accbank) {
                while ($row=mysqli_fetch_assoc($select_accbank)) {
                  echo $row['user_accountbank'];
                }
              }
              ?>
            </td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="4" style="font-size:10px">
              **Note: The payment limit is maximum 2 hours after placing an order.**
            </td>
          </tr>
          <tr>
            <td colspan="4">
              <input type="text" name="recipient_name" value="<?php echo $recipient_name?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_phone" value="<?php echo $recipient_phone?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_address" value="<?php echo $recipient_address?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_subdis" value="<?php echo $recipient_subdis?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_city" value="<?php echo $recipient_city?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_province" value="<?php echo $recipient_province?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_country" value="<?php echo $recipient_country?>" hidden />
            </td>
            <td colspan="4">
              <input type="text" name="recipient_postalcode" value="<?php echo $recipient_postalcode?>" hidden />
            </td>
          </tr>
          <tr>
            <td colspan="4">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2">&nbsp;</td>
            <td colspan="2">
              <input class="btn btn-success" type="submit" name="submit" value="BUY">
            </td>
          </tr>
        </table>
      </form>
      <?php
      }else {
        echo "bloq";
      }
     ?>
     <br />
     <hr width="70%">
      <div class="row" style="margin:0px;">
        <div class="col-sm-12">
          <h6>arminTeam&trade; &copy; 2019</h6>
        </div>
      </div>
  </body>
</html>
