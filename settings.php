<?php
  require 'includes/dbconnect.php';
  if(!isset($_SESSION['email'])){
    header("Location: http://localhost/ecommercev2/index.php");
  }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lifestyle Store | Settings</title>
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
    <main>
      <div class="container">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 login_form_container">
              <h2>Change Password</h2>
              <form action="includes/settings_script.php" method="post">
                <div class="form-group <?php if($_GET['err'] == "wrong_pass"){echo "has-error";}?>">
                  <input type="password" class="form-control" name="opassword" placeholder="Old Password" required>
                </div>
                <div class="form-group <?php if($_GET['err'] == "no_match"){echo "has-error";}?>">
                  <input type="password" class="form-control" name="npassword1" placeholder="New Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
                  <p class="help-block">use formete: At least 1 Uppercase, At least 1 Lowercase, At least 1 Number, At least 1 Symbol, symbol allowed[ !@#$%^&*_=+- ],Min 8 chars and Max 12 chars</p>
                </div>
                <div class="form-group <?php if($_GET['err'] == "no_match"){echo "has-error";}?>">
                  <input type="password" class="form-control" name="npassword2" placeholder="Re-type New Password" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" required>
                </div>
                <button type="submit" class="btn btn-primary">Change</button>
              </form>
            </div>
          </div>
      </div>
    </main>
    <!--     footer     ---->
    <?php
      require 'includes/footer.php';
     ?>
  </body>
</html>
