<?php
  //establise connection
  require 'dbconnect.php' ;
  //fetch values from from
  $name = mysqli_escape_string($connection,$_POST['name']);
  $email = mysqli_real_escape_string($connection,$_POST['email']);
  $password = mysqli_real_escape_string($connection,$_POST['password']);
  $enc_password = md5($password);
  $contact = mysqli_real_escape_string($connection,$_POST['contact']);
  $city = mysqli_real_escape_string($connection,$_POST['city']);
  $address = mysqli_real_escape_string($connection,$_POST['address']);

  //check for duplicate email
  $query = "SELECT id FROM users WHERE email = '$email'";
  $duplicates = mysqli_query($connection,$query) or die('unable to check!!!');
  $dup = mysqli_num_rows($duplicates);
  if ($dup > 1) {
    header("Location: http://localhost/ecommercev2/signup.php?err=already_exist");
  } else {
    //create query
    $query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name','$email','$enc_password','$contact','$city','$address')";
    //execute query
    $query_status = mysqli_query($connection,$query) or die('unable to insert!!!');
    //redirect to login page
    $link = "http://localhost/ecommercev2/login.php?email=".$email;
    header("Location: $link");
  }
 ?>
