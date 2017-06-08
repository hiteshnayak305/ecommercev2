<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Sign Up</title>
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
            <li><a href="login.php"><strong> <span class="glyphicon glyphicon-log-in"></span>  Login</strong></a></li>
            <li class="active"><a href="signup.php"><strong> <span class="glyphicon glyphicon-user"></span>  Signup</strong></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!--       main body      -->
    <main class="padtop">
      <div class="container form_container">
          <h2>SIGN UP</h2>
          <form  action="includes/signup_script.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="contact" placeholder="Contact">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="city" placeholder="City">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="address" placeholder="Address">
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
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
