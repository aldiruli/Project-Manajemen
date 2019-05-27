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
    <div class="container">
      <div class="row">
        <div class="col-sm-6"><br />
          <h3><kbd>WELCOME TO<br />Project Manajemen MARKETPLACE</kbd></h3>&nbsp;
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-2">
          <br />
          <a href="./login.php" class="text-danger">
            <i class="fa fa-sign-in fa-3x" aria-hidden="true"></i>
          </a>
        </div>
      </div>
      <br />
      <div class="row">
        <?php include './config/select-product.php'; ?>
      </div>
      <br />
      <div class="row">
        <div class="col-sm-12">
          <h6>arminTeam&trade; &copy; 2019</h6>
        </div>
      </div>
    </div>
  </body>
</html>
