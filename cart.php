<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Cart</title>
      <!-- bootstrtap stylesheets-       -->
      <link rel="stylesheet" type="text/css" href="bootstrap_offline/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="bootstrap_offline/css/bootstrap-theme.min.css"/>
      <!-- bootstrap scripts-    --->
      <script type="text/javascript" src="bootstrap_offline/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="bootstrap_offline/js/bootstrap.min.js"></script>
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
            <li class="active"><a href="cart.php"><strong> <span class="glyphicon glyphicon-shopping-cart"></span>  Cart</strong></a></li>
            <li><a href="settings.php"><strong> <span class="glyphicon glyphicon-cog"></span>  Settings</strong></a></li>
            <li><a href="logout.php"><strong> <span class="glyphicon glyphicon-log-out"></span>  Logout</strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

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
    <footer class="navbar-fixed-bottom">
      <div class="container text-center">
        <p>Copyright © Lifestyle Store. All Rights Reserved. Contact Us: +91 90000 00000</p>
      </div>
    </footer>
  </body>
</html>
