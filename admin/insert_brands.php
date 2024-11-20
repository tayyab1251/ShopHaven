<?php include 'admin-header.php'; ?>

<div class="container-fluid d-flex flex-column min-vh-100">
    <div class="flex-grow-1 d-flex justify-content-center align-items-center">
        <div class="text-center">
            <h1 class="text-primary mb-4">Add Brands</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="brands" class="form-control" placeholder="Enter brand name" >
                </div>
                <button type="submit" name="insert" class="btn btn-primary">Add Brand</button>
            </form>
        </div>
    </div>

    <!-- Footer section -->
    <?php include 'admin-footer.php'; ?>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['insert'])) {
    $brand_title = $_POST['brands'];
    if (isset($brand_title) && !empty($brand_title)) {
        echo $brand_title;
        include 'db-config.php';
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $selected_data = "SELECT * FROM `brands` WHERE brands_title = '$brand_title'";
        $selected_result = mysqli_query($conn, $selected_data);

        $rows = mysqli_num_rows($selected_result);
        if ($rows > 0) {
            echo "<script>alert('{$brand_title} already exists in brands !!')</script>";
        } else {
            $query = "INSERT INTO `brands` (brands_title) VALUES ('$brand_title')";
            
            if (mysqli_query($conn, $query)) {
                echo "<script>alert('{$brand_title} added successfully')</script>";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
    }
}
?>

