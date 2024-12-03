<?php
require 'common/search-header.php';
require_once 'functions/functions.php';
?>


<div id="home" class="container-fluid p-0">
<div class="text-center bg-light py-3">
        <h2>ShopHaven</h2>
        <a href=""></a>
        <p>Your Ultimate Shopping Destination.</p>
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
