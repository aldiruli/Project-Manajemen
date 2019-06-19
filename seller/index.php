<!DOCTYPE html>
<?php
  include "../config/connection.php";
    session_start();
      if (empty($_SESSION['username'])){
        header("Location:../login.php");
      }else{
          if ($_SESSION['username']) {
            echo "Log in as ".$_SESSION['username'];
          }else {
            header("Location:../login.php");
          }
      }
?>
<html>
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
    <title>Seller Page</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel='shortcut icon' type='image/x-icon' href='../img/ico-x.png' />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body><tt><center><br />
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <img class="animate" src="../img/ico-x.png" alt="Narotama Logo" width="100px" height="100px" draggable="false" style="pointer-events:none">
        </div>
      </div>
      <br />
      <nav class="navbar navbar-expand-md">
        <div class="animate2">Project Manajemen MARKETPLACE</div>
        <button class="navbar-toggler bg-info navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="nav nav-tabs col-sm-12 navbar-expand-md" role="tablist">
            <li class="nav-item col-sm-2">
              <a class="" data-toggle="tab" href="">&nbsp;</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link active" data-toggle="tab" href="#Home">Home</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link" data-toggle="tab" href="#NewData">New Data</a>
            </li>
            <li class="nav-item col-sm-2">
              <a class="nav-link" href="../logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <div class="tab-content">
        <div id="Home" class="container tab-pane active"><br>
          <h3>Welcome to Project Manajemen MARKETPLACE Data Center</h3>
          <center>
              <ul class="nav nav-tabs col-sm-12" role="tablist">
                <li class="nav-item col-sm-2">
                  <a class="nav-link active" data-toggle="tab" href="#select-product">Product</a>
                </li>
              </ul>
          </center><br />
          <div class="row">
            <div class="col-sm-12 tab-content">
              <div id="select-product" class="container tab-pane active">
                <h3>Product Data</h3>
                <?php include '../config/my-product.php'; ?>
              </div>
            </div>
          </div>
        </div><br />
        <div id="NewData" class="container tab-pane fade"><br>
          <div class="row">
            <div class="col-sm-10">
              <h3>Upcoming Product Data on Project Manajemen MARKETPLACE</h3>
              <hr />
            </div>
            <div class="col-sm-5"></div>
          </div>
          <div class="row">
            <article class="col-sm-3">
              <ul class="nav nav-link" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#product">Product</a>
                </li>
              </ul>
            </article>
            <div class="col-sm-9">
                <aside class="tab-content">
                  <div id="product" class="container tab-pane fade">
                    <h3>New Product Data</h3>
                    <div class="row">
                      <div class="col-sm-1"></div>
                      <div class="col-sm-8">
                        <?php include './form-product.php'; ?>
                      </div>
                    </div>
                  </div>
                </aside>
            </div>
          </div>
        </div>
      </div>
      <div class="container modal-footer">
        <i>&copy; arminTeam&trade;&nbsp;2019 All Rights Reserved.</i>
      </div>
    </div>
  </body>
</html>
