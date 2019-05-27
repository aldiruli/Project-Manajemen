<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">
  <head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no">
	  <title>SignUp - Project Manajemen MARKETPLACE</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel='shortcut icon' type='image/x-icon' href='./img/ico-x.png' />
  </head>
	<body style="background:lavenderblush;"><tt><center>
	   <div class="container">
      <div class="row">
         <div class="col-sm-12" style="padding:10px">
           <a href="../Project-Manajemen" style="color:black;text-decoration:none"><h3><span style="color:deeppink">Project Manajemen</span> MARKETPLACE</h3><br /></a>
           <h5>create your account</h5>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <form class="" action="./config/insert-user.php" method="post">
             <table>
               <tr>
                 <td>Name</td>
                 <td>:</td>
                 <td><input class="hmm" type="text" name="name" placeholder="Shaza Eilish" required /></td>
               </tr>
               <tr>
                 <td>Username (ID)</td>
                 <td>:</td>
                 <td><input class="hmm" type="text" name="username"placeholder="scrupscrup" required /></td>
               </tr>
               <tr>
                 <td>Password</td>
                 <td>:</td>
                 <td><input class="hmm" type="password" name="password" placeholder="****" required /></td>
               </tr>
               <tr>
                 <td>Phone</td>
                 <td>:</td>
                 <td><input class="hmm" type="tel" name="phone" placeholder="+62" required /></td>
               </tr>
               <tr>
                 <td></td>
                 <td></td>
                 <td align="right">
                   <input class="btn btn-success" type="submit" name="submit" value="Create">
                 </td>
               </tr>
             </table>
           </form>
         </div>
       </div>
     </div>
     <br />
     <div class="container modal-footer">
       <i>&copy; arminTeam&trade;&nbsp;2019 All Rights Reserved.</i>
     </div>
  </body>
</html>
