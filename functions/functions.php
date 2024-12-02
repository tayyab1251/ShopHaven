<?php

# Connection
function connectDb()
{
    global $conn;
    $SERVERNAME = "localhost";
    $USERNAME = 'root';
    $PASSWORD = '';
    $DB_NAME = 'mystore';
    $conn = mysqli_connect($SERVERNAME, $USERNAME, $PASSWORD, $DB_NAME);
    if (!$conn) {
        die('Connection failed' . mysqli_connect_error());
    }
}

# Get all products
function getProducts()
{
    global $conn;

    $product = "SELECT * FROM `products` ORDER BY rand()";
    $result_products = mysqli_query($conn, $product);

    if (mysqli_num_rows($result_products) > 0) {
        while ($row = mysqli_fetch_assoc($result_products)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image'];

            echo '<form method="POST" action="cart.php" class="productCart">
        <div class="card">
            <img src="./admin/product-images/' . $product_image . '" alt="' . $product_title . '">
            <h1>' . $product_title . '</h1>
            <p class="price">$' . number_format($product_price, 2) . '</p>
            <p>' . $product_description . '</p>
            <div class="qntity">
                <label for="quantity">Quantity:</label>
                <input type="number" class="quantity-input" id="quantity" name="quantity" value="1" min="1" max="100">
            </div>
            <input type="hidden" name="product_id" value="' . $product_id . '">
            <button type="submit" class="add-to-cart">Add to Cart</button>
        </div>  
    </form>';
        }
    }
}

// addToCart();
# Get Brands
function getBrands()
{
    global $conn;
    $select_brands = "SELECT * FROM `brands`";
    $result = mysqli_query($conn, $select_brands);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $brands_id = $row['brands_id'];
            $brands_title = $row['brands_title'];

            echo '<li><a class="dropdown-item" href="' . htmlspecialchars($brands_id) . '">' . htmlspecialchars($brands_title) . '</a></li>';
        }
    }
}

# Get Categories
function getCategories()
{
    global $conn;
    $select_categories = "SELECT * FROM `categories`";
    $result = mysqli_query($conn, $select_categories);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $categories_id = $row['categories_id'];
            $categories_title = $row['categories_title'];

            echo '<li><a class="dropdown-item" href="' . htmlspecialchars($categories_id) . '">' . htmlspecialchars($categories_title) . '</a></li>';
        }
    }
}
// Function to display the cart icon with the total number of items in the cart
function totalCartProducts() {
    global $conn;

    // Query to get all rows from the cart table
    $cart_products = "SELECT * FROM `cart`";
    
    if ($result = mysqli_query($conn, $cart_products)) {
        $row_count = mysqli_num_rows($result);

        if ($row_count > 0) {
            echo '<a class="nav-link" style="color: yellow;" href="cart.php">
                    <i class="ri-shopping-cart-fill" style="font-size: 1rem;">
                        <sup>' . $row_count . '</sup>
                    </i>
                  </a>';
        } else {
            echo '<a class="nav-link" href="cart.php">
                    <i class="ri-shopping-cart-fill">
                        <sup>0</sup>
                    </i>
                  </a>';
        }
    }
}



# Searching a product
function searchProduct()
{
    global $conn;

    $user_request = $_GET['search'];

    $product = "SELECT * FROM `products` WHERE product_keywords LIKE '%$user_request%' ";
    $result_products = mysqli_query($conn, $product);

    if (mysqli_num_rows($result_products) > 0) {

        while ($row = mysqli_fetch_assoc($result_products)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_price = $row['product_price'];
            $product_image = $row['product_image'];

            echo '<div class="card">
                    <img src="./admin/product-images/' . $product_image . '" alt="' . $product_title . '">
                    <h3>' . $product_title . '</h3>
                    <p class="price">$' . number_format($product_price, 2) . '</p>
                    <p>' . $product_description . '</p>
                    <p><button>Add to Cart</button></p>
                 </div>';
        }
    } else {
        echo '<div class="no-results-message" style="text-align: center; padding: 20px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 5px; color: #721c24;">
                <h4>Oops! No products found for "' . htmlspecialchars($user_request) . '"</h4>
                <p>Try searching with different keywords or check your spelling.</p>
              </div>';
    }
}
