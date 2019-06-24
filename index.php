<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
	  <title>Project Manajemen MARKETPLACE</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel='shortcut icon' type='image/x-icon' href='img/ico-x.png' />
  </head>
  <body><center><tt>

    <nav class="navbar navbar-expand-lg navbar-light "style="background-color: #e3f2fd;">
      <a href="#">
        <img src="img/index.jpeg" width="200" height="80" alt="">
      </a>
      <button class="navbar-toggler bg-info navbar-dark" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <form class="form-inline my-2 my-lg-0" action="index.php" method="GET">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Store or Product Search" aria-label="Search" style="width:800px;">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      <a href="login.php" style="padding-left:100px;">login</a>
    </form>
  </div>
</nav>
<br />
    <div class="container">
      <div class="row">
        <?php
          if (isset($_GET['search'])) {
            include './config/search.php';
          }else {
            include './config/select-product.php';
          }
        ?>
      </div>
      <br />
      <div class="row" style="margin:0px;">
        <div class="col-sm-12">
          <h6>arminTeam&trade; &copy; 2019</h6>
        </div>
      </div>
    </div>
  </body>
</html>
