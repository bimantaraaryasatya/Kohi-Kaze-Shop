<?php
session_start();
if ($_SESSION['status_login_admin'] != true) {
    echo "  <script>
                alert('Login first!')
                location.href = 'signin.php'
            </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/sidebar.css">
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <title>Admin</title>
</head>
<body>
    <div class="admin-page">
        <aside class="side-bar">
            <div class="side-bar-top">
                <div class="side-bar-title">
                    <h1>Kohi Kaze</h1>
                </div>
                <div class="side-bar-list">
                    <ul>
                        <li class="menu-section">
                            <span class="menu-title">User:</span>
                            <a href="readUser.php"><i class="fa-solid fa-book"></i> Read</a>
                        </li>
    
                        <li class="menu-section">
                            <span class="menu-title">Product:</span>
                            <a href="readProduct.php"><i class="fa-solid fa-book"></i> Read</a>
                            <a href="createProduct.php"><i class="fa-solid fa-plus"></i> Create</a>
                        </li>
    
                        <li class="menu-section">
                            <span class="menu-title">Admin:</span>
                            <a href="readAdmin.php"><i class="fa-solid fa-book"></i> Read</a>
                            <a href="createAdmin.php"><i class="fa-solid fa-plus"></i> Create</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="side-bar-bottom">
                <div class="side-bar-logout">
                    <ul>
                        <li class="menu-logout">
                            <a href="logoutAdmin.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
    </div>
</body>
</html>
