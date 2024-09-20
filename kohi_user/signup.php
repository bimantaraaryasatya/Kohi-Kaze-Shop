<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signup.css">
    <style>
        label{
            display: block;
        }
    </style>
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-page">
        <div class="image-content">
            <img src="../images/coffe_img_1.png" alt="coffe_image">
        </div>

        <div class="register-content">
            <div class="register-content-title">
                <h2>Welcome</h2>
                <p>Sign up and join with us on <span style="color: #4E342E;">Kohi Kaze Shop</span></p>
            </div>

            <div class="register-form">
                <form action="proses_signup" method="post">
                    <label for="">Username</label>
                    <input type="text" name="nama_user" id="username" placeholder="Enter Your Username">
                    <label for="email_user">Email</label>
                    <input type="text" name="email_user" id="email_user" placeholder="Enter Your Email">
                    <label for="password_user">Password</label>
                    <input type="text" name="password_user" id="password_user" placeholder="Enter Your Password">
                    <label for="confirm_password_user">Confirm Password</label>
                    <input type="text" name="confirm_password_user" id="confirm_password_user" placeholder="Confirm Your Password">
                    <input type="submit" value="Sign Up" class="submit-btn">
                </form>
            </div>
            
            <div class="signin-prompt">
                <p>Already have an account? <a href="signin.php">Sign In</a></p>
            </div>
        </div>
    </div>
</body>
</html>