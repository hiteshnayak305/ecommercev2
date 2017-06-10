<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Cart</title>
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
    <!--       main body      -->
    <main class="padtop">
      <div class="container form_container">
        <table class="table">
          <thead>
            <th>Item Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>&nbsp;</th>
          </thead>
          <tbody>
            <tr><td>&nbsp;</td></tr>
            <tr>
              <td>&nbsp;</td>
              <td>Total</td>
              <td>Rs 0/-</td>
              <td><a class="btn btn-primary" href="success.php">Confirm Order</a></td>
            </tr>
          </tbody>
        </table>
      </div><!-- container -->
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
