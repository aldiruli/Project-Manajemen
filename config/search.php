<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
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
  <body><tt>
    <?php
      $key_search = $_GET['search'];
    ?>
    <div class="row">
      <div class="col-sm-12">
        <h5>Search: <?php echo $key_search;?></h5>
      </div>
    </div><br/>
    <?php
      require './config/connection.php';
      function rupiah($angka){
        $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
        return $hasil_rupiah;
      }

      $sel_search = mysqli_query($connection, "SELECT * FROM product WHERE (`product_name` LIKE '%".$key_search."%') OR (`product_seller` LIKE '%".$key_search."%')");

      if ($sel_search) {
        while ($row=mysqli_fetch_assoc($sel_search)) {
      ?>
      <!-- line 45-102 sama seperti select product di index, tp butuh penyesuaian lagi-->
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
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
  </body>
</html>