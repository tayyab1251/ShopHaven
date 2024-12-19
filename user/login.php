<?php
session_start();
require('header.php');
require '../db-confg.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Redirect if already logged in
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT password FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Verify
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit();
        } else {
            $error = "Invalid password.";
            // echo '<script>alert(" ' . $error . 'Logged out");</script>';
        }
    } else {
        $error = "Invalid username.";
        // echo '<script>alert(" ' . $error . 'Logged out");</script>';
    }
}
?>

<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h3 class="text-center mb-4">Login</h3>
        <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
        <form method="POST">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" value="<?php echo htmlspecialchars($_POST['username'] ?? ''); ?>">
            </div>
            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100" name="login">Login</button>
            <div class="mt-3 text-center">
                <small><a href="/forgot-password">Forgot Password?</a></small>
            </div>
            <div class="mt-3 text-center">
                <small>Don't have an account? <a href="registration.php">Create account</a></small>
            </div>
        </form>
    </div>
</div>

<?php require('footer.php'); ?>