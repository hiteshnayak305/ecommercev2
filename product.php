<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Products</title>
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

      <?php
        require 'includes/dbconnect.php';
       ?>

      <div class="container">
        <div class="jumbotron">
          <h1>Welcome to our Lifestyle Store!</h1>
          <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div> <!--jumbotron-->
        <div class="row text-center">
          <?php
            $query_text = "SELECT name, price FROM items";
            $result = mysqli_query($connection,$query_text) or die(mysqli_error($result));
            while ($row = mysqli_fetch_array($result) ) { ?>
              <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                  <img src="images/shirt.jpg" alt="shirt"/>
                  <div class="caption">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>price <?php echo $row['price']; ?>.00</p>
                    <a class="btn btn-primary btn-block" href="#">Add to cart</a>
                  </div>
                </div>
              </div><!-- column -->
          <?php
            }  ?>
        </div><!--row -->
      </div><!-- container -->
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
