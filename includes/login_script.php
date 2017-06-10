<?php
  //establise db connection
  require 'dbconnect.php';

  //get input
  $email = mysqli_real_escape_string($_POST['email']);
  $password = mysqli_real_escape_string($_POST['password']);
  $md5_password = md5($password);
  //user existence query
  $query = "SELECT id,email,name,password FROM users WHERE email='$email'";
  $result = mysqli_query($connection,$query) or die('email query unsuccessful!!!');
  $num_rows = mysqli_num_rows($result);

  //check existence
  if ($num_rows < 1) {
    $link = "http://localhost/ecommercev2/login.php?err=no_user&email=".$email;
    //header("Location: $link");
  } else {
    //check for password
    $res_arr = mysqli_fetch_row($result);
    if ($md5_password == $res_arr['password']) {
      //set Session
      $_SESSION['id'] = $res_arr['id'];
      $_SESSION['email'] = $res_arr['email'];
      $_SESSION['name'] = $res_arr['name'];
    } else {
      //header("Location: http://localhost/ecommercev2/login.php?err=no_pass");
    }
  }
 ?>
