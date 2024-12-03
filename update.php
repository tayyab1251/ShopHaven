<?php
require 'common/header.php';
require_once 'functions/functions.php';

connectDb();

if (isset($_GET['item_id'])) {
  // echo 'delete.php ' . $_GET['item_id']
  $item_id = $_GET['item_id'];

  $query = "SELECT * FROM cart WHERE item_id = $item_id";
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {
    $item_quantity = $row['item_quantity'];
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update_quantity'])) {
    echo 'update button clicked';

    $new_quantity = $_POST['new_quantity'];
    echo $new_quantity;

    $update_query = "UPDATE `cart` SET item_quantity=$new_quantity WHERE item_id=$item_id";

    if (mysqli_query($conn, $update_query)) {
      echo '<script>alert("Quantity Updated !");</script>';
      echo '<script>window.location.href = "cart.php";</script>';
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
  } else {
    echo 'not clicked';
  }
} else {
  echo 'Variable not set';
}


?>
<style>
  .form-container {
    width: 200px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin: 0 auto;
  }

  .edit-qnty {
    text-align: center;
    margin: 2rem 0;
  }
</style>

<h1 class="edit-qnty">Edit Quantity</h1>

<div class="form-container">

  <form action="" method="POST">
    <div class="mb-3">
      <label for="numberInput" class="form-label">Edir Quantity</label>
      <input type="number" class="form-control" name="new_quantity" id="numberInput" value="<?php echo $item_quantity?>" placeholder="Enter new quantity" required>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="update_quantity">Update Quantity</button>
  </form>
</div>

<?php include 'common/footer.php'; ?>