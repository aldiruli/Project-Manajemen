<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
	  <title>Project Manajemen MARKETPLACE</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
  </head>
	<body style="background:lavenderblush;"><tt>
	   <div class="container">
      <div class="row">
         <div class="col-sm-5" style="padding:10px">
           <a href="../Project-Manajemen" style="color:black;text-decoration:none"><h3>WELCOME TO<br /><span style="color:deeppink">Project Manajemen</span><br />MARKETPLACE</h3></a>
         </div>
         <div class="col-sm-2">
         </div>
           <form class="col-sm-5" action="./config/gate-checking.php" method="post" style="padding:20px;">
           <table align=center>
             <tr>
               <td>Username</td>
               <td>:</td>
               <td><input class="hmm" type="text" name="user_name" placeholder="Username" required /></td>
             </tr>
             <tr>
               <td>Password</td>
               <td>:</td>
               <td><input class="hmm" type="password" name="password" placeholder="Password" required /></td>
             </tr>
             <tr>
               <td></td>
               <td></td>
               <td>
                 <a href="./signup.php" style="color:black">Sign Up</a>
               </td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td align="right">
                 <input class="btn btn-info" type="submit" name="login" value="Login" />
               </td>
             </tr>
           </table>
           </form>
       </div>
     </div>
     <div class="container modal-footer">
       <i>&copy; arminTeam&trade;&nbsp;2019 All Rights Reserved.</i>
     </div>
  </body>
</html>
