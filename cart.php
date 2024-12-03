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

while ($row = mysqli_fetch_assoc($result)) {
    $item_id = $row['item_id'];
    $item_title = $row['item_title'];
    $item_price = $row['item_price'];
    $item_quantity = $row['item_quantity'];

    $total = $item_price * $item_quantity;
    
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
    </div>';

// Close the database connection
mysqli_close($conn);
?>

<?php include 'common/footer.php'; ?>