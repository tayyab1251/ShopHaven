<?php 

require_once 'functions/functions.php';

connectDb();

if(isset($_GET['item_id'])) {
    // echo 'delete.php';
    
    $item_id = $_GET['item_id'];
    $querry = "DELETE FROM `cart` WHERE item_id = $item_id";

    if (mysqli_query($conn, $querry)) {
      echo '<script>alert("Product deleted!");</script>';
      echo '<script>window.location.href = "cart.php";</script>';
      exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
      
      mysqli_close($conn);
      

}else {
    echo 'Variable not set';

}


?>