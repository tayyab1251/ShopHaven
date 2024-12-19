<?php require('header.php') ?>

<?php

if (isset($_POST['register'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo 'post';
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        $hashed = password_hash($confirm_password,PASSWORD_DEFAULT);
        // echo $hashed;

        // Validate
        if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
            echo "<script>alert('All fields are required!');</script>";
        } else {
            $profile = $_FILES['profile']['name'];
            $tempname = $_FILES['profile']['tmp_name'];
            if (empty($profile)) {
                echo "<script>alert('Please upload a profile picture!');</script>";
            } else {
                if ($password !== $confirm_password) {
                    echo "<script>alert('Passwords do not match!');</script>";
                } else {
                    $folder = "images/" . $profile;
                    // include database
                    require'../db-confg.php';
                    if (!isset($conn)) {
                        die('Connection failed' . mysqli_connect_error());
                    } else {
                        // echo 'connected';
                        // Check user exist
                        $user_check = "SELECT * FROM `users` WHERE username = '$username' OR email = '$email'";
                        $check_result = mysqli_query($conn, $user_check);

                        $rows = mysqli_num_rows($check_result);
                        if ($rows > 0) {
                            echo "<script>alert(' User already registered!!')</script>";
                        } else {
                            $insert = "INSERT INTO `users` (username, email, password, image) 
                            VALUES ('$username', '$email', '$hashed', '$profile')";

                            mysqli_query($conn, $insert);
                            #if moved 
                            if (move_uploaded_file($tempname, $folder)) {
                                // echo '<script>alert("Data saved and img uploaded!");</script>';
                                echo "<script>alert(' {$username} Registered Successfully!!')</script>";
                                echo '<script>window.location.href = "login.php";</script>';
                            }
                        }
                    }
                }
            }
        }
    }
}
?>

<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h3 class="text-center mb-4">Register</h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" placeholder="Enter your username">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" placeholder="Enter your email">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" placeholder="Enter your password">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="confirm-password" name="confirm-password" value="<?php echo isset($_POST['confirm-password']) ? $_POST['confirm-password'] : ''; ?>" placeholder="Confirm your password">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="image" class="form-label">Choose Image</label>
                <input type="file" class="form-control" id="image" name="profile" accept="image/*">
                <span class="small text-danger">Picture must be less than 2MB</span>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="register">Register</button>

            <div class="mt-3 text-center">
                <small>Already have an account? <a href="login.php">Login</a></small>
            </div>
        </form>
    </div>
</div>

<?php require('footer.php') ?>