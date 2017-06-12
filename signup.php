<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev2/product.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Sign Up</title>
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
          <h2>SIGN UP</h2>
          <form  action="includes/signup_script.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="contact" placeholder="Contact">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
          </form>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
