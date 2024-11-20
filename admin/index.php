<?php include 'admin-header.php' ;?>

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary dashboard-header">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="ri-dashboard-line"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="ri-user-line"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="ri-logout-box-line"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <h1 class="text-center mb-4">Admin Actions</h1>
        <div class="row">
            <div class="col-md-6">
                <a href="insert_products.php?add-product" class="btn btn-primary action-btn">
                    <i class="ri-file-add-line"></i> Insert Products
                </a>
                <a href="view_products.php" class="btn btn-secondary action-btn">
                    <i class="ri-eye-line"></i> View Products
                </a>
                <a href="insert_categories.php?add-category" class="btn btn-success action-btn">
                    <i class="ri-folder-add-line"></i> Insert Categories
                </a>
                <a href="view_categories.php" class="btn btn-warning action-btn">
                    <i class="ri-folder-line"></i> View Categories
                </a>
            </div>
            <div class="col-md-6">
                <a href="insert_brands.php" class="btn btn-info action-btn">
                    <i class="ri-price-tag-3-line"></i> Insert Brands
                </a>
                <a href="view-brands.html" class="btn btn-danger action-btn">
                    <i class="ri-price-tag-line"></i> View Brands
                </a>
                <a href="all-orders.html" class="btn btn-dark action-btn">
                    <i class="ri-shopping-cart-2-line"></i> All Orders
                </a>
                <a href="list-users.html" class="btn btn-secondary action-btn">
                    <i class="ri-user-3-line"></i> List Users
                </a>
            </div>
        </div>
    </div>
    <div class="container">
    </div>
<?php include 'admin-footer.php' ;?>