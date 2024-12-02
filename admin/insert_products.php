<?php

include 'admin-header.php';
include 'admin_functions.php';

?>


<?php insertProduct()?>

<!-- Centered container -->
<h5 class="card-title text-center h1 my-4">Add new Product</h5>
<div class="container d-flex justify-content-center align-items-center ">
    <div class="card shadow-lg" style="max-width: 600px; width: 100%;">
        <div class="card-body">

            <!-- Product Add Form -->
            <form method="POST" action="" enctype="multipart/form-data" class="needs-validation" novalidate>

                <!-- Product Title -->
                <div class="mb-3">
                    <label for="product_name" class="form-label">Product Title</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" required>

                </div>

                <!-- Product Description -->
                <div class="mb-3">
                    <label for="product_description" class="form-label">Product Description</label>
                    <input class="form-control" autocomplete="true" id="product_description" placeholder="Enter product description" name="product_description" required></input>

                </div>

                <!-- Product Keywords -->
                <div class="mb-3">
                    <label for="product_keywords" class="form-label">Product Keywords</label>
                    <input class="form-control" id="product_keywords" name="product_keywords" placeholder="Enter product keywords" required></input>

                </div>

                <!-- Brand Select -->
                <div class="mb-3">
                    <label for="brand_id" class="form-label">Select Brand</label>
                    <select class="form-select" id="brand_id" name="brand_name" required>
                        <option value="">-- Select Brand --</option>
                        <?php getProductBrands();?>
                    </select>
                </div>
                <!-- Category Select -->
                <div class="mb-3">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select class="form-select" id="category_id" name="category_name" required>
                        <option value="">-- Select Category --</option>
                        <?php getProductCategories()?>
                    </select>

                </div>
                <!-- price -->
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter product price">

                </div>
                <!-- Image Uploads -->
                <div class="mb-3">
                    <label for="product_image" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="product_image" name="product_image" accept="image/*">
                </div>
               
                <button type="submit" class="btn btn-primary w-100" name="insert">Add Product</button>
            </form>
        </div>
    </div>
</div>

<?php include 'admin-footer.php'; ?>