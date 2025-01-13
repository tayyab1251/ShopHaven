<?php
require 'common/header.php';
require_once 'functions/functions.php';
?>

<div id="home" class="container-fluid p-0">
    <div class="text-center bg-light py-3">
        <h2>ShopHaven</h2>
        <a href=""></a>
        <p>Your Ultimate Shopping Destination.</p>
            <!-- Display session message if exists -->
        <?php if (isset($_SESSION['email'])): ?>
            <div class="alert <?php echo (strpos($_SESSION['email'], 'not sent') === false) ? 'alert-success' : 'alert-error'; ?> alert-dismissible fade show" role="alert">
                <?php echo $_SESSION['email']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['email']); ?>
        <?php endif; ?>

    </div>

    <div class="container mt-5">
        <div class="row">
            <!-- Product Card Start -->
            <?php
            connectDb();
            getProducts();
            ?>
            <!-- Product Card End -->
        </div>
    </div>

</div>

<?php include 'common/footer.php'; ?>