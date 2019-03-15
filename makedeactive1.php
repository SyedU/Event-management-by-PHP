<?php
require_once('db.php');
$id = $_GET['id'];
$query_string = "UPDATE event1 SET status=2 WHERE id=$id";
mysqli_query($db_connection, $query_string);
header('location: listevent1.php');

?>
