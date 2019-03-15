<?php
session_start();

require_once('db.php');

$user_email = $_POST['email'];
$user_password = md5($_POST['password']);

$query_string ="SELECT COUNT(*) as validity, email FROM user WHERE email='$user_email' AND password='$user_password'";

$db_return = mysqli_query($db_connection, $query_string);

$after_assoc = mysqli_fetch_assoc($db_return);


if($after_assoc['validity'] == 1){
$_SESSION['login'] = 'Yes';
$_SESSION['email'] = $after_assoc['email'];

header('location: home.php');
}
else{
echo "Sorry ! Check Your login input";
}

?>
