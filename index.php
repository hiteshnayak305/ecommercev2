<?php
  require 'includes/dbconnect.php';
  if (isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev2/product.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Home</title>
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
    <?php
      require 'includes/navigation.php';
     ?>

    <!--       main body      -->
    <main>
      <div id="banner" class="container-fluid">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div id="banner_content" class="jumbotron">
              <h1>We sell lifestyle.</h1>
              <p class="lead">Flat 40% OFF on premium brands</p><br>
              <p class="lead">
                <a class="btn btn-info btn-lg" href="product.php" role="button"><strong>Shop Now!</strong></a>
              </p>
            </div>
          </div><!---  col   -->
        </div><!---   row   ---->
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
