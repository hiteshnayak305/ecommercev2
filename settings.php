<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Settings</title>
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
            <li class="active"><a href="settings.php"><strong> <span class="glyphicon glyphicon-cog"></span>  Settings</strong></a></li>
            <li><a href="logout.php"><strong> <span class="glyphicon glyphicon-log-out"></span>  Logout</strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--       main body      -->
    <main class="padtop">
      <div class="container form_container">
          <h2>Change Password</h2>
          <form action="#" method="post">
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Old Password">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="New Password">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="" placeholder="Re-type New Password">
            </div>
            <button type="submit" class="btn btn-primary">Change</button>
            <button type="reset" class="btn btn-primary">Reset</button>
          </form>
      </div>
    </main>
    <!--     footer     ---->
    <footer class="navbar-fixed-bottom">
      <div class="container text-center">
        <p>Copyright © Lifestyle Store. All Rights Reserved. Contact Us: +91 90000 00000</p>
      </div>
    </footer>
  </body>
</html>
