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
}



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

            echo '<li class="nav-item">
                        <a class="nav-link text-center" href="' . htmlspecialchars($brands_id) . '">' . htmlspecialchars($brands_title) . '</a>
                    </li>';
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

            echo '<li class="nav-item">
                        <a class="nav-link text-center" href="' . htmlspecialchars($categories_id) . '">' . htmlspecialchars($categories_title) . '</a>
                    </li>';
        }
    }
}
