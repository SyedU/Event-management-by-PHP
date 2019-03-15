<?php
require_once('db.php');

$user_email = $_POST['email'];
$band_id = $_POST['id'];


$query_string1 ="SELECT COUNT(*) as validity FROM services1 WHERE email='$user_email' AND bandid='$band_id'";

$db_return = mysqli_query($db_connection, $query_string1);
$after_assoc = mysqli_fetch_assoc($db_return);

if($after_assoc['validity'] > 0){

    echo "You have already booked or Check Email";
}

else
{
$query_string2= "SELECT COUNT(id) as validity1 FROM services1 WHERE bandid='$band_id'";
$db_return1 = mysqli_query($db_connection, $query_string2);
$after_assoc1 = mysqli_fetch_assoc($db_return1);
if($after_assoc1['validity1'] > 4){
echo "Capacity over";
}
else{

$query_string3= "SELECT * FROM event1 WHERE id='$band_id'";
$db_return2 = mysqli_query($db_connection, $query_string3);
$after_assoc2 = mysqli_fetch_assoc($db_return2);

$user_payment=$after_assoc2['payment'];

$query_string4 = "INSERT INTO services1(email,payment,bandid) VALUES ('$user_email','$user_payment','$band_id')";
mysqli_query($db_connection, $query_string4);

header('location: index.php');
}
}
?>
