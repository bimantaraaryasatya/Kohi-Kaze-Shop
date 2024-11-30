<?php
include "adminSecurity.php";
if ($_GET['id_admin']) {
    include "../kohi_user/connection.php";
    $query_hapus_admin = mysqli_query($conn, "DELETE FROM admin WHERE id_admin = '".$_GET['id_admin']."'");
    if ($query_hapus_admin) {
        echo "  <script>
                    alert('Successfully deleted admin')
                    location.href = 'readAdmin.php'
                </script>";
    }else{
        echo "  <script>
                    alert('Failed to delete admin')
                    location.href = 'readAdmin.php'
                </script>";
    }
}else{
    echo "  <script>
                alert('Admin id not found')
                location.href = 'readAdmin.php'
            </script>";
}