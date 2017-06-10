<?php
  require 'includes/session_init.php';
  require 'includes/session_check_index.php';
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
      <div id="banner">
        <div class="container" id="banner_content">
            <h2>We sell lifestyle.</h2>
            <p>Flat 40% OFF on premium brands</p>
            <a class="btn btn-info btn-lg active" href="product.php"><strong>Shop Now</strong></a>
        </div>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
