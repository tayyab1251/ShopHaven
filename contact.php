<?php
require 'common/header.php';
require_once 'functions/functions.php';
?>



<div class="contact-form">
        <h2>Contact Us</h2>

        <form action="sendMail.php" method="POST">
            <!-- Name Input -->
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name"  value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" required>
            </div>
            
            <!-- Email Input -->
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email"  value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            </div>

            <!-- Subject Input -->
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject of your message"  value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>" required>
            </div>

            <!-- Message Input -->
            <div class="form-group">
                <label for="message">Your Message</label>
                <textarea id="message" name="message" placeholder="Write your message here" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" name="sendMessage">Send Message</button>
        </form>

        <div class="form-footer">
            <p>Powered by <a href="#">Your Website</a></p>
        </div>
    </div>


<?php include 'common/footer.php'; ?>
