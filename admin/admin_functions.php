<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include '../functions/functions.php';
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
        $product_image1 = $_FILES['product_image']['name'];
        $product_image2 = $_FILES['product_image1']['name'];
        $product_image3 = $_FILES['product_image2']['name'];
        $tmp_image1 = $_FILES['product_image']['tmp_name'];
        $tmp_image2 = $_FILES['product_image1']['tmp_name'];
        $tmp_image3 = $_FILES['product_image2']['tmp_name'];
        $product_status = "true";
    
        // Check if any field is empty
        if (empty($product_name) || empty($product_description) || empty($product_keywords) ||
            empty($brand) || empty($category) || empty($product_price) || 
            empty($product_image1) || empty($product_image2) || empty($product_image3)) {
            echo '<script>alert("Fill all fields!");</script>';
            exit();
        }
    
        // Move uploaded files
        move_uploaded_file($tmp_image1, "./product-images/$product_image1");
        move_uploaded_file($tmp_image2, "./product-images/$product_image2");
        move_uploaded_file($tmp_image3, "./product-images/$product_image3");
    
        // Insert into database
        $insert_product = "INSERT INTO `products` 
            (product_title, product_description, product_keywords, brand_id, category_id, product_price, 
            product_image1, product_image2, product_image3, date, status) 
            VALUES 
            ('$product_name', '$product_description', '$product_keywords', '$brand', '$category', 
            '$product_price', '$product_image1', '$product_image2', '$product_image3', NOW(), '$product_status')";
    
        $result = mysqli_query($conn, $insert_product);
    
        if ($result) {
            echo '<script>alert("Product Inserted Successfully!");</script>';
        } else {
            echo '<script>alert("Error inserting product: ' . mysqli_error($conn) . '");</script>';
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