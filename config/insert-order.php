<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>ORDERING</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
    <script type="text/javascript">
    function doPrint() {
      window.print();
      setTimeout(function(){ document.location.href = "../../Project-Manajemen"; }, 3000);
    }
    </script>
  </head>
  <body onload="doPrint()"><tt><center><br />
    <?php
      if (isset($_POST['submit'])) {
        require './connection.php';
        date_default_timezone_set('Asia/Jakarta');

        $product_id           = $_POST['product_id'];
        $product_name         = strtoupper($_POST['product_name']);
        $product_image        = $_POST['product_image'];
        $product_quantity     = $_POST['product_quantity'];
        $product_price        = $_POST['product_totalprice'];
        $product_shop         = $_POST['product_shop'];
        $recipient_name       = strtoupper($_POST['recipient_name']);
        $recipient_phone      = $_POST['recipient_phone'];
        $recipient_address    = strtoupper($_POST['recipient_address']);
        $recipient_subdis     = strtoupper($_POST['recipient_subdis']);
        $recipient_city       = strtoupper($_POST['recipient_city']);
        $recipient_province   = strtoupper($_POST['recipient_province']);
        $recipient_country    = strtoupper($_POST['recipient_country']);
        $recipient_postalcode = $_POST['recipient_postalcode'];

        $insorder = mysqli_query($connection, "INSERT INTO request (request_productname,request_quantity,request_totalprice,request_buyername,request_buyerphone,request_buyeraddress,request_buyersubdis,request_buyercity,request_buyerprovince,request_buyercountry,request_buyerpostalcode,request_time) VALUES ('$product_name','$product_quantity','$product_price','$recipient_name','$recipient_phone','$recipient_address','$recipient_subdis','$recipient_city','$recipient_province','$recipient_country','$recipient_postalcode',now())");

        if ($insorder) {
          $quantitynow = mysqli_query($connection, "SELECT product_quantity FROM product WHERE id_product = '$product_id'");
          while ($rowc = mysqli_fetch_assoc($quantitynow)) {
            $updatequantity = $rowc['product_quantity'] - $product_quantity;
          }
          $updatestock = mysqli_query($connection, "UPDATE product set product_quantity ='$updatequantity' WHERE id_product='$product_id'");
        ?>
          <div class="container">
            <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-10">
                <table>
                  <tr>
                    <td colspan="3" align="center">
                      <?php
                        $selstore = mysqli_query($connection, "SELECT user_shopname FROM user WHERE user_shopname LIKE '%".$product_shop."%'");
                        if ($selstore) {
                          $row = mysqli_fetch_assoc($selstore);
                          echo "-- ".$row['user_shopname']." --";
                        }else {
                          echo "error";
                        }
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>
                      <?php echo $recipient_name?>
                    </td>
                  </tr>
                  <tr>
                    <td>Item</td>
                    <td>:</td>
                    <td>
                      <?php echo $product_name?>
                    </td>
                  </tr>
                  <tr>
                    <td>Quantity</td>
                    <td>:</td>
                    <td>
                      <?php echo $product_quantity?>
                    </td>
                  </tr>
                  <tr>
                    <td>Total Price</td>
                    <td>:</td>
                    <td>
                      <?php echo $product_price?>
                    </td>
                  </tr>
                  <tr>
                    <td>Time</td>
                    <td>:</td>
                    <td>
                      <?php
                        $waktu = time();
                        $format_waktu = date('d-m-Y H:i:s', $waktu);
                        echo $format_waktu;
                      ?>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-size:10px">
                      **Note: The payment limit is maximum 2 hours after placing an order, please get paid immediately.**
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3">&nbsp;</td>
                  </tr>
                  <tr>
                    <td colspan="3" style="font-size:11px" align="center">
                      Thanks for ur order.<br />Best Regrads: <?php echo $product_shop; ?>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col-sm-1"></div>
            </div>
          </div>
        <?php
        }else {
          echo "errno";
        }

      }else {
        echo "bloq";
      }
     ?>
  </body>
</html>
