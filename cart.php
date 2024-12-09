<?php
require 'common/header.php';

// Connect to the database
require_once 'functions/functions.php';

connectDb();

if (isset($_POST['product_id']) && isset($_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Get product details 
    $query = "SELECT * FROM products WHERE product_id = '$product_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $item_title = $row['product_title'];
    $item_price = $row['product_price'];

    // Insert
    $query = "INSERT INTO cart (item_id, item_title, item_price, item_quantity) 
              VALUES ('$product_id', '$item_title', '$item_price', '$quantity') 
              ON DUPLICATE KEY UPDATE item_quantity = item_quantity + '$quantity'";
    mysqli_query($conn, $query);
    echo '<script>alert("Product added to your cart!");</script>';
    echo '<script>window.location.href = "cart.php";</script>';
    exit();
}
// get all carted products
$query = "SELECT * FROM cart";
$result = mysqli_query($conn, $query);
$result_count = mysqli_num_rows($result);

if ($result_count > 0) {


    echo '<div class="container mt-5">
    <a href="index.php">Go back</a>        
    <h2 class="text-center mb-4">Shopping Cart</h2>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Item Title</th>
                <th>Item Price</th>
                <th>Item Quantity</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>';

    $subtotal = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $item_id = $row['item_id'];
        $item_title = $row['item_title'];
        $item_price = $row['item_price'];
        $item_quantity = $row['item_quantity'];

        $total = $item_price * $item_quantity;
        $subtotal += $total;

        echo '<tr>         
        <td>' . $item_title . '</td>
        <td>$' . number_format($item_price, 2) . '</td>
        <td>' . $item_quantity . '</td>
        <td>$' . number_format($total, 2) . '</td>
        <td>
            <a href="update.php?item_id=' . $item_id . '" class="ri-edit-line" title="Update" ></a> 
            <a href="delete.php?item_id=' . $item_id . '" class="ri-delete-bin-line" title="Delete"></a>
        </td>
    </tr>';
    }

    echo '</tbody>
        </table>
        </div>
             = <div class = "container py-2">
                    <row class="d-flex justify-content-between">
                        <div>
                            <p><strong class="border p-2">Subtotal: $' . number_format($subtotal, 2) . '</strong></p>
                        </div>
                        <div>
                            <a href="payment.php" class="btn btn-primary" title="Update" >Checkout </a> 
                        </div>
                    </row>
                </div>';

    // Close the database connection
    mysqli_close($conn);
} else {
    echo '<div class="container mt-5 text-center">
    <h2 class="text-center mb-4">Shopping Cart</h2>
    <div class="empty-cart">
        <i class="ri-shopping-cart-2-line" style="font-size: 50px; color: #ff7b7b;"></i>
        <p class="lead mt-3">Your cart is currently empty.</p>
        <p>Start shopping and add some items to your cart.</p>
        <a href="index.php" class="btn btn-success m-3">Browse Products</a>
    </div>
  </div>';
}

?>


<?php include 'common/footer.php'; ?>