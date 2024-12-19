<?php
require 'common/header.php';
require_once 'functions/functions.php';
?>

<div id="home" class="container-fluid p-0">
    <div class="text-center bg-light py-3">
        <h2>ShopHaven</h2>
        <a href=""></a>
        <p>Your Ultimate Shopping Destination.</p>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Product Card Start -->
            <?php
            connectDb();
            getProducts(); // Your function will echo the product cards
            ?>
            <!-- Product Card End -->
        </div>
    </div>

</div>

<?php include 'common/footer.php'; ?>