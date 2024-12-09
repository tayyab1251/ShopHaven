<?php require('header.php') ?>

<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <h3 class="text-center mb-4">Login</h3>
        <form method="POST">
            <div class="form-group mb-3">
                <label for="username" class="form-label">Username</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>">
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <div class="mt-3 text-center">
                <small><a href="/forgot-password">Forgot Password?</a></small>
            </div>
            <div class="mt-3 text-center">
                <small>Don't have an account? <a href="registration.php">Create account</a></small>
            </div>
        </form>
    </div>
</div>

<?php require('footer.php') ?>