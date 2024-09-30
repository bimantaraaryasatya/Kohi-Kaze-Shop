<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
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
    <script src="https://kit.fontawesome.com/5e57207f98.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/header.css">
    <title>Header</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-title">
                <h1>Kohi Kaze</h1>
            </div>

            <div class="nav-content">
                <ul id="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="coffe.php">Coffe</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <div class="burger" id="burger-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

            <div class="profile-icon">
                <details>
                    <summary><i class="fa-solid fa-user"></i></summary>
                    <ul id="profile-links"> 
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </details>
            </div>

            <div class="dropdown_menu">
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="coffe.php"><li>Coffe</li></a>
                    <a href="cart.php"><li>Cart</li></a>
                    <a href="#"><li>About</li></a>
                    <a href="profile.php"><li>Profile</li></a>
                    <a href="logout.php"><li>Logout</li></a>
                </ul>
            </div>
        </nav>
    </header>

    <script>
        // Dropdown Responsif
        const burger = document.querySelector('.burger');
        const burgerIcon = document.querySelector('.burger i');
        const dropDownMenu = document.querySelector('.dropdown_menu');

        burger.onclick = function(){
            dropDownMenu.classList.toggle('open');
        }
    </script>
</body>
</html>
