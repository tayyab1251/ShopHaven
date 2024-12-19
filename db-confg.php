<?php

$SERVERNAME = "localhost";
$USERNAME = 'root';
$PASSWORD = '';
$DB_NAME = 'mystore';
$conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB_NAME);
if (!$conn) {
    die('Connection failed' . mysqli_connect_error());
}
?>