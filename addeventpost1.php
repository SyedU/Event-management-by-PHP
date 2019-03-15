<?php
require_once('db.php');
$event_name = $_POST['bandname'];
$event_place = $_POST['place'];
$event_capacity = $_POST['capacity'];
$event_date = $_POST['date'];
$event_payment = $_POST['payment'];


  $query_string = "INSERT INTO event1(bandname, place, capacity, date, payment) VALUES ('$event_name','$event_place','$event_capacity','$event_date','$event_payment')";
  mysqli_query($db_connection, $query_string);
  header('location: addevent1.php');



?>
