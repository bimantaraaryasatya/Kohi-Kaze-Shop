<?php
include "adminSecurity.php";
if ($_GET['id_user']) {
    include "../kohi_user/connection.php";
    $query_hapus_user = mysqli_query($conn, "DELETE FROM user WHERE id_user = '".$_GET['id_user']."'");
    if ($query_hapus_user) {
        echo "  <script>
                    alert('Successfully deleted user')
                    location.href = 'readUser.php'
                </script>";
    }else{
        echo "  <script>
                    alert('Failed to delete user')
                    location.href = 'readUser.php'
                </script>";
    }
}else{
    echo "  <script>
                alert('User id not found')
                location.href = 'readUser.php'
            </script>";
}