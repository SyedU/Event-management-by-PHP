<?php
session_start();
require_once('db.php');


$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$query_string1 ="SELECT COUNT(*) as validity FROM user WHERE email='$user_email'";

$db_return = mysqli_query($db_connection, $query_string1);
$after_assoc = mysqli_fetch_assoc($db_return);

if($after_assoc['validity'] > 0){

echo "Your input alraedy there or Use another data";
}
else{

  $query_string2 = "INSERT INTO user(email, password) VALUES ('$user_email','$user_password')";

  mysqli_query($db_connection, $query_string2);
  echo "Successfully User Created ";
}
