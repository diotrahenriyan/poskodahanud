<?php  
  @session_start();
  include "koneksi.php";

  if (@$_SESSION['admin'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['dandahanud'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['paintel'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['paops'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['papers'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['palog'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['padin'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['bahub'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['batitih'])
  {
      header("location: page-menu-admin.php");
  }
  else if (@$_SESSION['ploter'])
  {
      header("location: page-menu-admin.php");
  }
  else
  {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Core CSS - Include with every page -->
        <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <link href="assets/css/main-style.css" rel="stylesheet" />
    </head>
    <body class="login">
        <div class="container" align="center" style="padding-top:100px;">
            <img src="assets/img/arhanud.png" alt="" style="width:200px; height=163px; " align="center" />
            <h2 class="title-login">POSKO DAHANUD <l>APP 1.0</l></h2>
        </div>
        <div class="container" style="width:300px;">
            <form action="proses-login.php" method="post">
                <div class="form-group">
                  <label for="email" class="col-white">User ID:</label>
                  <input type="text" name="user" class="form-control" id="user" placeholder="Enter User ID" style=" width:250px !important; " >
                </div>
                <div class="form-group">
                  <label for="pwd" class="col-white">Password:</label>
                  <input type="password" name="pass" class="form-control" id="pass" placeholder="Enter Password" style=" width:250px !important; ">
                </div>
                <div align="center">
                  <input type="submit" value="ENTER" name="login" class="btn btn-default btn-login" align="center" />
                </div>
            </form>
        </div>
        <!-- Core Scripts - Include with every page -->
        <script src="assets/plugins/jquery-1.10.2.js"></script>
        <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="assets/plugins/pace/pace.js"></script>
        <script src="assets/scripts/siminta.js"></script>
    </body>
</html>

<?php 
  } 
?>