<?php
  //establise connection
  require 'DBConnection.php' ;
  //fetch values from from
  $name = mysqli_escape_string($connection,$_POST['name']);
  $email = mysqli_real_escape_string($connection,$_POST['email']);
  $password = mysqli_real_escape_string($connection,$_POST['password']);
  $contact = mysqli_real_escape_string($connection,$_POST['contact']);
  $city = mysqli_real_escape_string($connection,$_POST['city']);
  $address = mysqli_real_escape_string($connection,$_POST['address']);

  //create query
  $query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name','$email','$password','$contact','$city','$address')";
  //execute query
  $query_status = mysqli_query($connection,$query) or die('unable to insert!!!');
  //redirect to login page
  header("Location: http://localhost/ecommercev2/login.php");
 ?>
