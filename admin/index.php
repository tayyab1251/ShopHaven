<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .dashboard-header {
            background-color: #343a40;
            color: white;
        }

        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .nav-link.active {
            background-color: #495057;
            color: white !important;
        }

        footer {
            background-color: #343a40;
        }
    </style>
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary dashboard-header">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="ri-dashboard-line"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="ri-notification-3-line"></i> Notifications</a>
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
        <div class="row g-4">
            <!-- Action Buttons -->
            <div class="col-md-4">
                <a href="insert-products.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-file-add-line display-4 text-primary"></i>
                        <h5 class="card-title mt-3">Insert Products</h5>
                        <p class="card-text">Add new products to the inventory.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="view-products.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-eye-line display-4 text-success"></i>
                        <h5 class="card-title mt-3">View Products</h5>
                        <p class="card-text">See and manage all products.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="insert-categories.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-folder-add-line display-4 text-warning"></i>
                        <h5 class="card-title mt-3">Insert Categories</h5>
                        <p class="card-text">Add new product categories.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="view-categories.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-folder-line display-4 text-danger"></i>
                        <h5 class="card-title mt-3">View Categories</h5>
                        <p class="card-text">Manage and edit categories.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="insert-brands.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-price-tag-3-line display-4 text-info"></i>
                        <h5 class="card-title mt-3">Insert Brands</h5>
                        <p class="card-text">Add new brands to the catalog.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="view-brands.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-price-tag-line display-4 text-secondary"></i>
                        <h5 class="card-title mt-3">View Brands</h5>
                        <p class="card-text">Manage all brand details.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="all-orders.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-shopping-cart-2-line display-4 text-primary"></i>
                        <h5 class="card-title mt-3">All Orders</h5>
                        <p class="card-text">View and manage customer orders.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="all-payments.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-wallet-line display-4 text-success"></i>
                        <h5 class="card-title mt-3">All Payments</h5>
                        <p class="card-text">Track and manage payments.</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="list-users.html" class="card text-decoration-none text-dark">
                    <div class="card-body text-center border">
                        <i class="ri-user-3-line display-4 text-warning"></i>
                        <h5 class="card-title mt-3">List Users</h5>
                        <p class="card-text">Manage registered users.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-center py-3">
        <p class="mb-0">&copy; 2024 Admin Dashboard. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
