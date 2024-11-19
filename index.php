<!-- My folder structure -->
<!-- 
Store
|-- /admin
|-- /common
   |-- header.php
   |-- footer.php
|-- /images
index.php 
-->

<?php include 'common/header.php'; ?>

<div class="container-fluid p-0">

    <!-- Secondary Navbar -->
    <nav class="nav bg-secondary py-2">
        <a class="nav-link active text-dark" aria-current="page" href="#">Welcome Guest</a>
        <a class="nav-link text-dark" href="#">Login</a>
    </nav>
    <!-- Secondary Navbar Ends -->

    <!-- Title -->
    <div class="text-center bg-light py-3">
        <h2>Ecommerce Store</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. In, vel!</p>
    </div>
    <!-- Title Ends -->

    <!-- Main Section -->
    <div class="row">
        <!-- Products Section -->
        <div class="col-md-10">
            <div class="row justify-content-center">
                <!-- First Card -->
                <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/cloth_2.jpg" class="card-img-top" alt="Clothing">
                        <div class="card-body text-center">
                            <h5 class="card-title">Apples</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <!-- 2-->
                <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/fruit.jpg" class="card-img-top" alt="Fruits">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fruits</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                 <!-- 3 -->
                 <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/jean (3).jpg" class="card-img-top" alt="Fruits">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fruits</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                 <!-- 4 -->
                 <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/bags (3).jpg" class="card-img-top" alt="Fruits">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fruits</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                 <!-- 5-->
                 <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/fruit.jpg" class="card-img-top" alt="Fruits">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fruits</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                 <!-- 6 -->
                 <div class="col-md-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/chicken.jpg" class="card-img-top" alt="Fruits">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fruits</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <!-- other cards.. -->
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-2 bg-secondary p-0">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light">
                <li class="nav-item bg-primary">
                    <a class="nav-link fw-bold text-white text-center h4" href="/">Delivery Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Brand 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Brand 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Brand 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Brand 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Brand 5</a>
                </li>
            </ul>
            <!-- Categories  -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-light">
                <li class="nav-item bg-primary">
                    <a class="nav-link fw-bold text-white text-center h4" href="/">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Category 1 </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Category 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Category 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Category 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Category 5</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Main Section Ends -->
</div>
<?php include 'common/footer.php'; ?>
