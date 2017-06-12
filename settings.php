<?php
  require 'includes/dbconnect.php';
  if(!isset($_SESSION['email'])){
    header("Location: http://localhost/ecommercev2/index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Settings</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrtap stylesheets-       -->
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
    <!-- bootstrap scripts-    --->
    <script type="text/javascript" src="../bootstrap/jquery-3.2.1/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- custom stylesheets-      -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>

  <body>
    <!--    navigation bar   -->
    <?php
      require 'includes/navigation.php';
     ?>
    <!--       main body      -->
    <main class="padtop">
      <div class="container form_container">
          <h2>Change Password</h2>
          <form action="includes/settings_script.php" method="post">
            <div class="form-group">
              <input type="password" class="form-control" name="opassword" placeholder="Old Password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="npassword1" placeholder="New Password">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="npassword2" placeholder="Re-type New Password">
            </div>
            <button type="submit" class="btn btn-primary">Change</button>
          </form>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
