<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>CHECKOUT</title>
  </head>
  <body><tt><center>
    <?php
      if (isset($_POST['submit'])) {
        $product_id           = $_POST['product-id'];
        $product_name         = strtoupper($_POST['product-name']);
        $product_image        = $_POST['product-image'];
        $product_quantity     = $_POST['product-quantity'];
        $product_price        = $_POST['product-price'];
        $product_shop         = $_POST['product-shopname'];
        $recipient_name       = strtoupper($_POST['recipient-name']);
        $recipient_phone      = $_POST['recipient-phone'];
        $recipient_address    = strtoupper($_POST['recipient-address']);
        $recipient_subdis     = strtoupper($_POST['recipient-subdis']);
        $recipient_city       = strtoupper($_POST['recipient-city']);
        $recipient_province   = strtoupper($_POST['recipient-province']);
        $recipient_country    = strtoupper($_POST['recipient-country']);
        $recipient_postalcode = $_POST['recipient-postalcode'];
    ?>
    <br />
    <h3>--CHECKOUT--</h3>
    <table border="1">
      <tr>
        <td>For Shipping</td>
        <td colspan="3">:</td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Name</td>
        <td>:</td>
        <td><?php echo $recipient_name;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Phone</td>
        <td>:</td>
        <td><?php echo $recipient_phone;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Address</td>
        <td>:</td>
        <td><?php echo $recipient_address;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Sub-District</td>
        <td>:</td>
        <td><?php echo $recipient_subdis;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient City</td>
        <td>:</td>
        <td><?php echo $recipient_city;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Province</td>
        <td>:</td>
        <td><?php echo $recipient_province;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Country</td>
        <td>:</td>
        <td><?php echo $recipient_country;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Postal Code</td>
        <td>:</td>
        <td><?php echo $recipient_postalcode;?></td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>For Payment</td>
        <td colspan="3">:</td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Store</td>
        <td>:</td>
        <td><?php echo $product_shop;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Product Name</td>
        <td>:</td>
        <td><?php echo $product_name;?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Product Price</td>
        <td>:</td>
        <td>
          <?php echo $product_price;?>
        </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>Product Quantity</td>
        <td>:</td>
        <td><?php echo $product_quantity;?></td>
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
    </table>
    <?php
      }else {
        echo "bloq";
      }
      mysqli_close($connection);
     ?>
  </body>
</html>
