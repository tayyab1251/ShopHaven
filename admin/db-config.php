<?php
$SERVERNAME = "localhost";
$USERNAME = 'root';
$PASSWORD = '';
$DB_NAME = 'mystore';
// Create connection
$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB_NAME);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>