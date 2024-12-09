<?php 

$title = '';
// print_r($_SERVER['REQUEST_URI']);
if($_SERVER['REQUEST_URI'] == '/store/user/login.php') {
    $title = 'Login';
}else {
    $title = 'Registration';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
