<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title></title>
    <link rel='stylesheet' href="../font-awesome/css/font-awesome.min.css">
    <style media="screen">
      .thumbnail img{
        width: 180px;
        height: 180px;
      }
      a{
        text-decoration: none;
      }
      .modal-body p{
        text-align: left;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
        require './config/connection.php';
        function rupiah($angka){
          $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
          return $hasil_rupiah;
        }
        $selectproduct = mysqli_query($connection, "SELECT * FROM product ORDER BY 1 DESC");
        if ($selectproduct) {
          while ($row = mysqli_fetch_assoc($selectproduct)) {
        ?>
          <div class="col-sm-4">
            <div class="thumbnail">&nbsp;
              <img src="./img/product/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image'] ?>" style='width:50%;border-radius:10px;' draggable="false">
              <div class="caption"><br/>
                <h4><?php echo $row['product_name'] ?></h4>
                <h6>QTY: <?php echo $row['product_quantity']; ?></h6>
                IDR: <?php echo rupiah($row['product_price']) ?>
              </div>
              <br />
              <p>
                <button type="button" class="btn text-white" data-toggle="modal" data-target="#<?php echo $row['id_product'] ?>" style="background:#C8000A">Details</button>
                <br />
            <!-- Modal -->
            <div class="modal fade" id="<?php echo $row['id_product'] ?>" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <h4><?php echo $row['product_name']; ?></h4>
                    <img src="./img/product/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image'] ?>" style='width:50%;height:50%;border-radius:10;' draggable="false">
                    <p>Description: <br /> <?php echo $row['product_description']; ?></p>
                    <br />
                    <p>
                      QUANTITY:
                      <?php echo $row['product_quantity']; ?>
                    </p>
                    <br />
                    <p>
                      PRICE:
                      <?php echo rupiah($row['product_price']) ?>
                    </p>
                    <p>
                      <?php
                      $selectuser = mysqli_query($connection, "SELECT * FROM user ORDER BY 1 DESC");
                      if ($selectuser) {
                        $rowb = mysqli_fetch_assoc($selectuser)
                      ?>
                      Ask Us: <a href="https://wa.me/<?php echo $rowb['user_phone']?>?text=Hi%20<?php echo $row['product_seller']?>,%20<?php echo $row['product_name']?>%20still%20available?" class="fa fa-whatsapp fa-2x" target="_blank" style="text-align:center"></a>
                      <?php
                      }else {
                        echo "string";
                      }
                      ?>
                    </p>
                  </div>
                  <div class="modal-footer">
                    <a href="cart.php?buy=<?php echo $row['id_product']?>" class="fa fa-cart-plus fa-2x"></a>&nbsp;
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
              </p>
            </div>
          </div>
        <?php
          }
        }else {
          echo '&laquo'."NO PRODUCT".'&raquo';
        }
        mysqli_close($connection);
         ?>
      </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
  </body>
</html>
