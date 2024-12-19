<?php

session_start();

echo "<script>alert('Logged out');</script>";



//destroying sessions
session_unset();
session_destroy();

echo "<script>window.location.href = './login.php';</script>";

?>