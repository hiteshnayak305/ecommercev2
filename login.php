<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Login</title>
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
            <li class="active"><a href="login.php"><strong> <span class="glyphicon glyphicon-log-in"></span>  Login</strong></a></li>
            <li><a href="signup.php"><strong> <span class="glyphicon glyphicon-user"></span>  Signup</strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--       main body      -->
    <main class="padtop">
      <div class="container form_container">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">LOGIN</h3>
          </div>
          <div class="panel-body">
            <p class="text-warning">Login to make a purchase</p>
            <form action="#" method="post">
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="" placeholder="Password">
              </div>
              <button type="submit" name="button" class="btn btn-primary">Login</button>
            </form>
          </div>
          <div class="panel-footer">
            <p class="text-info">Don't have an account? <a href="signup.php"><b class="text-primary">Register</b></a></p>
          </div>
        </div>
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
