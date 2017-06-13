<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev2/product.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Login</title>
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
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 login_form_container">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">LOGIN</h3>
              </div>
              <div class="panel-body">
                <p class="text-warning">Login to make a purchase</p>
                <form action="includes/login_script.php" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>
                  <button type="submit" name="button" class="btn btn-primary">Login</button>
                </form>
              </div>
              <div class="panel-footer">
                <p class="text-info">Don't have an account? <a href="signup.php"><b class="text-primary">Register</b></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
