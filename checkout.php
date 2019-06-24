<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>CHECKOUT</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
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
    <h3>--CHECKOUT LIST--</h3>
    <form class="" action="./payment.php" method="post">
    <table>
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
        <input type="text" name="recipient_name" value="<?php echo $recipient_name?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Phone</td>
        <td>:</td>
        <td><?php echo $recipient_phone;?></td>
        <input type="text" name="recipient_phone" value="<?php echo $recipient_phone?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Address</td>
        <td>:</td>
        <td><?php echo $recipient_address;?></td>
        <input type="text" name="recipient_address" value="<?php echo $recipient_address?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Sub-District</td>
        <td>:</td>
        <td><?php echo $recipient_subdis;?></td>
        <input type="text" name="recipient_subdis" value="<?php echo $recipient_subdis?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient City</td>
        <td>:</td>
        <td><?php echo $recipient_city;?></td>
        <input type="text" name="recipient_city" value="<?php echo $recipient_city?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Province</td>
        <td>:</td>
        <td><?php echo $recipient_province;?></td>
        <input type="text" name="recipient_province" value="<?php echo $recipient_province?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Country</td>
        <td>:</td>
        <td><?php echo $recipient_country;?></td>
        <input type="text" name="recipient_country" value="<?php echo $recipient_country?>" hidden />
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right">Recipient Postal Code</td>
        <td>:</td>
        <td><?php echo $recipient_postalcode;?></td>
        <input type="text" name="recipient_postalcode" value="<?php echo $recipient_postalcode?>" hidden />
      </tr>
      <tr>
        <td colspan="4">
          <input type="text" name="product_id" value="<?php echo $product_id?>" hidden />
        </td>
        <td colspan="4">
          <input type="text" name="product_name" value="<?php echo $product_name?>" hidden />
        </td>
        <td colspan="4">
          <input type="text" name="product_image" value="<?php echo $product_image?>" hidden />
        </td>
        <td colspan="4">
          <input type="text" name="product_quantity" value="<?php echo $product_quantity?>" hidden />
        </td>
        <td colspan="4">
          <input type="text" name="product_price" value="<?php echo $product_price?>" hidden />
        </td>
        <td colspan="4">
          <input type="text" name="product_shop" value="<?php echo $product_shop?>" hidden />
        </td>
      </tr>
      <tr>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td colspan="2">
          <input class="btn btn-success" type="submit" name="submit" value="PROCESS">
        </td>
      </tr>
    </table>
    </form>
    <?php
      }else {
        echo "bloq";
      }
      mysqli_close($connection);
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
