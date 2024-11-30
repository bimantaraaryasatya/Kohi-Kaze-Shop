<?php
session_start();
session_destroy();

if(!isset($_SESSION['status_login_admin'])){
    echo "  <script> 
                alert('Login First!')
                window.location.href = 'readUser.php'
            </script>";
}else{
    echo "  <script>
                alert('Log out Success!');
                window.location.href = 'index.php';
            </script>";
}