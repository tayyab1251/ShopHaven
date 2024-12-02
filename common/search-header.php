<?php 

    require_once './functions/functions.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShopHaven</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <!-- Custome CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body class="">
    <!-- Navbar Starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">ShopHaven</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#" onclick="window.location.href = 'index.php';">Home</a>
        </li>

        <!-- Dropdown Menu For Brands -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Brands
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                connectDb();
                getBrands();
                ?>
            </ul>
        </li>

        
        <!-- Dropdown Menu Categories-->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
                connectDb();
                getCategories();
                ?>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="ri-shopping-cart-fill"><sup>1</sup></i></a>
        </li>

    </ul>
    <form class="d-flex " role="search" action="" method="get">
        <input class="form-control me-2  border-light" name="search" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" name="search-product" >Search</button>
    </form>
        <!-- Searching -----] -->
</div>

        </div>
    </nav>
    <!-- Navbar Ends -->

    