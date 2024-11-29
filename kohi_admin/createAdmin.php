<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/createAdmin.css">
    <style>
        label{
            margin-top: 10px;
            display: block;
            font-weight: 500;
            font-size: 18px;
        }
    </style>
    <title>Create Admin</title>
</head>
<body>
    <aside>
        <?php
            include "sidebar.php";
        ?>
    </aside>

    <section class="main-content">
        <div class="title">
            <h1>Create <span style="color: #6B4EFF;">Admin</span></h1>
        </div>
        <div class="register-form">
            <form action="proses_signupAdmin.php" method="post">
                <label for="nama_admin">Name</label>
                <input type="text" name="nama_admin" id="nama_admin" placeholder="Enter Your Name">
                <label for="username_admin">Username</label>
                <input type="text" name="username_admin" id="username_admin" placeholder="Enter Your Username">
                <label for="password_admin">Password</label>
                <input type="password" name="password_admin" id="password_admin" placeholder="Enter Your Password">
                <label for="confirmPassword_admin">Confirm Password</label>
                <input type="password" name="confirmPassword_admin" id="confirmPassword_admin" placeholder="Confirm Your Password">
                <input type="submit" value="Sign In" class="submit-btn">
            </form>
        </div>
    </section>
</body>
</html>