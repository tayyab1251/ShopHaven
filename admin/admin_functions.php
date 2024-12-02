<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once  '../functions/functions.php';
function insertProduct()
{
    connectDb();
    global $conn;
    if (isset($_POST['insert'])) {
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_keywords = $_POST['product_keywords'];
        $brand = $_POST['brand_name'];
        $category = $_POST['category_name'];
        $product_price = $_POST['price'];
        $product_image = $_FILES['product_image']['name'];

        $tmp_image1 = $_FILES['product_image']['tmp_name'];

        $product_status = "true";

        // Check if any field is empty
        if (
            empty($product_name) || empty($product_description) || empty($product_keywords) ||
            empty($brand) || empty($category) || empty($product_price) ||
            empty($product_image)
        ) {
            echo '<script>alert("Fill all fields!");</script>';
            exit();
        }

        // Move uploaded files
        move_uploaded_file($tmp_image1, "./product-images/$product_image");

        // Check for duplicate
        $sql_check = "SELECT * FROM `products` WHERE product_title = '$product_name'";
        $sql_result = mysqli_query($conn, $sql_check);

        if (mysqli_num_rows($sql_result) > 0) {
            echo '<script>alert("Product already exists inside database !");</script>';
        } else {
            // Insert 
            $insert_product = "INSERT INTO `products` 
                                (product_title, product_description, product_keywords, brand_id, category_id, product_price, 
                                product_image, date, status) 
                                VALUES 
                                ('$product_name', '$product_description', '$product_keywords', '$brand', '$category', 
                                '$product_price', '$product_image', NOW(), '$product_status')";

            $result = mysqli_query($conn, $insert_product);

            if ($result) {
                echo '<script>alert("Product Inserted Successfully!");</script>';
            } else {
                echo '<script>alert("Error inserting product: ' . mysqli_error($conn) . '");</script>';
            }
        }
    }
}
# Insert Product page Brands

function getProductBrands()
{
    connectDb();
    global $conn;
    $select_brands = "SELECT * FROM `brands`";
    $result = mysqli_query($conn, $select_brands);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $brands_id = $row['brands_id'];
            $brands_title = $row['brands_title'];
            
            echo '<option value="' . $brands_id . '">' . $brands_title . '</option>';
        }
    }
}

# Insert Product page Categories

function getProductCategories()
{
    connectDb();
    global $conn;
    $select_categories = "SELECT * FROM `categories`";
    $result = mysqli_query($conn, $select_categories);

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $categories_id = $row['categories_id'];
            $categories_title = $row['categories_title'];

            echo '<option value="' . $categories_id . '">' . $categories_title . '</option>';
        }
    }
}
