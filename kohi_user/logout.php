<?php
session_start();
session_destroy();

if(!isset($_SESSION['status_login'])){
    echo "  <script> 
                alert('Login First!')
                window.location.href = 'index.php'
            </script>";
}else{
    echo "  <script>
                alert('Log out Success!');
                window.location.href = 'signin.php';
            </script>";
}