<?php
require 'common/search-header.php';
require_once 'functions/functions.php';
?>


<div id="home" class="container-fluid p-0">
    <div class="text-center bg-light py-3">
        <h2>Ecommerce Store</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, vel!</p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row d-flex justify-content-evenly">
                <?php
                if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['search-product'])) {
                   searchProduct();
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>
