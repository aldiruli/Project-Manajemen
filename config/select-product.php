<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel='stylesheet' href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    <?php
    function rupiah($angka){
      $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
      return $hasil_rupiah;
    }
    ?>
    <div class="container">
      <div class="row">
        <?php
        require './config/connection.php';

        $selectproduct = mysqli_query($connection, "SELECT * FROM product ORDER BY 1 DESC");
        if ($selectproduct) {
          while ($row = mysqli_fetch_assoc($selectproduct)) {
        ?>
          <div class="col-sm-4">
            <div class="thumbnail">&nbsp;
              <img src="./img/product/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image'] ?>" style='width:50%;border-radius:10px;' draggable="false">
              <div class="caption">
                <h3><?php echo $row['product_name'] ?></h3>
                <h6>QTY: <?php echo $row['product_quantity']; ?></h6>
                IDR: <?php echo rupiah($row['product_price']) ?>
              </div>
              <p>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $row['id_product'] ?>">Details</button>
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
                    <img src="./img/product/<?php echo $row['product_image']; ?>" alt="<?php echo $row['product_image'] ?>" style='width:50%;border-radius:10;' draggable="false">
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
                      Tanya Kami : <a href="https://api.whatsapp.com/send?phone=xxxx" class="fa fa-whatsapp fa-2x" target="_blank" style="text-align:center"></a>
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
          echo "string";
        }
        mysqli_close($connection);
         ?>
      </div>
    </div>
  </body>
</html>
