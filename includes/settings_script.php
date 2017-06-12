<?php
  require 'dbconnect.php';
  $old_password = mysqli_real_escape_string($connection,$_POST['opassword']);
  $md5_password = md5($old_password);
  $new_password1 = mysqli_real_escape_string($connection,$_POST['npassword1']);
  $new_password2 = mysqli_real_escape_string($connection,$_POST['npassword2']);
  //create query
  $email = $_SESSION['email'];
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($connection, $query) or die('unable to fetch');
  $row = mysqli_fetch_array($result);
  if ($md5_password == $row['password']) {
    if ($new_password1 == $new_password2) {
      $enc_password = md5($new_password1);
      $query = "UPDATE users SET password='$enc_password'";
      $status = mysqli_query($connection, $query);
      header("Location: http://localhost/ecommercev2/product.php");
    } else {
      header("Location: http://localhost/ecommercev2/settings.php?err=no_match");
    }

  } else {
    header("Location: http://localhost/ecommercev2/settings.php?err=wrong_pass");
  }

 ?>
