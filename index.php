<?php
include 'common/header.php';
include 'functions/functions.php';
?>



<div class="container-fluid p-0">
    <div class="text-center bg-light py-3">
        <h2>Ecommerce Store</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, vel!</p>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="row d-flex justify-content-evenly">
                <?php
                connectDb();
                function getProducts() {
                    global $conn;

                    $product = "SELECT * FROM `products` ORDER BY rand()";
                    $result_products = mysqli_query($conn, $product);

                    if (mysqli_num_rows($result_products) > 0) {
                        while ($row = mysqli_fetch_assoc($result_products)) {
                            $product_id = $row['product_id'];
                            $product_title = $row['product_title'];
                            $product_description = $row['product_description'];
                            $product_price = $row['product_price'];
                            $product_image1 = $row['product_image1'];

                            echo '<div class="card">
                                    <img src="./admin/product-images/' . $product_image1 . '" alt="' . $product_title . '">
                                    <h1>' . $product_title . '</h1>
                                    <p class="price">$' . number_format($product_price, 2) . '</p>
                                    <p>' . $product_description . '</p>
                                    <p><button>Add to Cart</button></p>
                                 </div>';
                        }
                    }
                }
                getProducts();
                ?>
            </div>
        </div>
    </div>
</div>

<?php include 'common/footer.php'; ?>
