<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/signinAdmin.css">
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
                <h2>Hi Admin!</h2>
                <p>Please Login and Work</p>
            </div>

            <div class="login-form">
                <form action="proses_signinAdmin.php" method="post">
                    <label for="username_admin">Username</label>
                    <input type="text" name="username_admin" id="username_admin" placeholder="Enter Your Username">
                    <label for="password_admin">Password</label>
                    <input type="password" name="password_admin" id="password_admin" placeholder="Enter Your Password">
                    <input type="submit" value="Sign In" class="submit-btn">
                </form>
            </div>
        </div>
    </div>
</body>
</html>