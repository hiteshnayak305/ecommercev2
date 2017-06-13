<?php
  require 'includes/dbconnect.php';
  if (!isset($_SESSION['email'])) {
    header("Location: http://localhost/ecommercev2/index.php");
  }
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>Lifestyle Store | Success</title>
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
     <!-----   navigation   ------>
     <?php
       require 'includes/navigation.php';
      ?>
    <main>
      <?php
        $id = $_GET['id'];
        $user_id = $_SESSION['id'];
        foreach ($id as $value) {
          $query = "UPDATE user_items SET status='Confirmed' WHERE item_id='$value' AND user_id='$user_id'";
          $status = mysqli_query($connection,$query) or die('unable to confirm!!!');
        }
      ?>
      <div class="container">
        <div class="jumbotron">
          <h1 class="display-3">Thankyou!</h1>
          <p class="lead">Your order is confirmed. Thank you for shopping with us.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="product.php" role="button">shop more..</a>
          </p>
        </div>
      </div>
    </main>
     <!--     footer     ---->
     <?php
       require 'includes/footer.php';
      ?>
   </body>
 </html>
