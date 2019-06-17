<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
	  <title>Project Manajemen MARKETPLACE</title>
    <link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
  </head>
  <body><center><tt>
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-bottom:0px;">
    <ul class="navbar-nav mr-auto">

        <img class="brand" alt="Brand" src="img/index.jpeg">
      <li>
        <form class="form-inline my-2 my-lg-0" style="padding:12px 100px">
          <input class="form-control mr-sm-1" type="search" placeholder="Cari produk atau Toko" aria-label="Search" style="width:650px;">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </li>
      <li class="login">
        <a href="./login.php">
          login
        </a>
      </li>
    </ul>
  </div>
</nav>
<br />
    <div class="container">
      <div class="row">
        <?php include './config/select-product.php'; ?>
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
