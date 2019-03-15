<?php
require_once('db.php');

$event_name = $_POST['bandname'];
$event_place = $_POST['place'];
$event_capacity = $_POST['capacity'];
$event_date = $_POST['date'];
$event_payment = $_POST['payment'];
$event_id = $_POST['event1_id'];


$query_string = "UPDATE event1 SET bandname='$event_name', place='$event_place', capacity='$event_capacity', date='$event_date', payment='$event_payment' WHERE id=$event_id";
mysqli_query($db_connection, $query_string);
header('location: listevent1.php');

?>
