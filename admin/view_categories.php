<?php
session_start();
include 'admin-header.php'; 
?>

<div class="container mt-4">
    <h1 class="text-primary text-center mb-4">Categories List</h1>

    <?php
    include 'db-config.php';  

    $query = "SELECT * FROM categories";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {

        echo '<table class="table table-striped">';
        echo '<thead><tr><th>ID</th><th>Product Name</th></tr></thead>';
        echo '<tbody>';
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['categories_id'] . '</td>';
            echo '<td>' . htmlspecialchars($row['categories_title']) . '</td>';
            echo '</tr>';
        }
        
        echo '</tbody></table>';
    } else {
        echo '<p>No products found in the database.</p>';
    }

    mysqli_close($conn);
    ?>

</div>

<?php include 'admin-footer.php'; 
