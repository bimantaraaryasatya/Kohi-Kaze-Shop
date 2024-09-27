<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signin.css">
    <style>
        label{
            display: block;
        }
    </style>
    <title>Sign In</title>
</head>
<body>
    <div class="signin-page">
        <div class="image-content">
            <img src="../images/coffe_img_1.png" alt="coffe_image">
        </div>

        <div class="login-content">
            <div class="login-content-title">
                <h2>Welcome Back</h2>
                <p>Enter your Coffe Haven, <span style="color: #4E342E;">Kohi Lovers! </span>Enjoy the experience</p>
            </div>

            <div class="login-form">
                <form action="proses_signin.php" method="post">
                    <label for="nama_user">Username</label>
                    <input type="text" name="nama_user" id="nama_user" placeholder="Enter Your Username">
                    <label for="password_user">Password</label>
                    <input type="password" name="password_user" id="password_user" placeholder="Enter Your Password">
                    <input type="submit" value="Sign In" class="submit-btn">
                </form>
            </div>
            
            <div class="signup-prompt">
                <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
    </div>
</body>
</html>