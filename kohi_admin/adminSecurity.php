<?php
session_start();
if ($_SESSION['status_login_admin'] != true) {
    echo "  <script>
                alert('Login first!')
                location.href = 'index.php'
            </script>";
}
