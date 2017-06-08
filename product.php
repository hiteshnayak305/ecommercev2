<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Products</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrtap stylesheets-       -->
    <link rel="stylesheet" type="text/css" href="http://localhost/bootstrap/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/bootstrap/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css"/>
    <!-- bootstrap scripts-    --->
    <script type="text/javascript" src="http://localhost/bootstrap/jquery-3.2.1/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="http://localhost/bootstrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <!-- custom stylesheets-      -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  </head>

  <body>
    <!--    navigation bar   -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><strong>Lifestyle Store</strong></a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navi" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="cart.php"><strong> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</strong></a></li>
            <li><a href="settings.php"><strong> <span class="glyphicon glyphicon-cog"></span>  Settings</strong></a></li>
            <li><a href="logout.php"><strong> <span class="glyphicon glyphicon-log-out"></span>  Logout</strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--       main body      -->
    <main class="padtop">

      <?php
        require 'includes/DBConnection.php';
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
    <footer>
      <div class="container text-center">
        <p>Copyright © Lifestyle Store. All Rights Reserved. Contact Us: +91 90000 00000</p>
      </div>
    </footer>
  </body>
</html>
