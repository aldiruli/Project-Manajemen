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
  <body id="page-top" style="background:#E8A735"><center><tt>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background:#8C0004">
      <div class="container">
        <a href="#">
          <img src="img/index.jpeg" width="200" height="80" alt="" style="padding-right:10px;border-radius:10px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <form class="form-inline my-2 my-lg-0" action="index.php" method="GET">
            <input class="form-control mr-sm-1" type="search" name="search" placeholder="Store or Product Search" aria-label="Search" style="width:750px;">
            <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
            <a class="nav-link js-scroll-trigger btn-outline-warning" href="login.php" target="_blank">
              <i class="fa fa-sign-in"></i>
            </a>
          </form>
        </div>
      </div>
    </nav>

    <header class="text-white"style="background:#E8A735">
      <div class="container text-center">
        <h1>&nbsp;</h1>
        <p class="lead">&nbsp;</p>
      </div>
    </header>

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
    </div>


    <!-- Footer -->
    <footer class="py-2" style="background:#8C0004">
      <div class="container">
        <p class="m-0 text-center text-white">arminTeam&trade; &copy; 2019</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
  </body>
</html>
