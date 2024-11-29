<?php
    // Menyertakan koneksi ke database
    include "../kohi_user/connection.php";

    // Menentukan jumlah data per halaman
    $limit = 5;

    // Mengambil nomor halaman dari URL (default halaman pertama)
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // Menghitung posisi data yang akan ditampilkan untuk halaman saat ini
    $offset = ($page - 1) * $limit;

    // Query untuk mengambil data user dengan batasan dan offset
    $query_get_user = mysqli_query($conn, "SELECT * FROM user LIMIT $limit OFFSET $offset");

    // Query untuk menghitung total data user
    $total_records = mysqli_query($conn, "SELECT COUNT(*) AS total FROM user");
    $total_records = mysqli_fetch_assoc($total_records)['total'];

    // Menghitung total halaman yang tersedia
    $total_pages = ceil($total_records / $limit);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/readUser.css">
    <title>Read User</title>
</head>
<body>
    <aside>
        <?php include "sidebar.php"; ?>
    </aside>

    <section class="main-content">
        <div class="title">
            <h1>Read <span style="color: #6B4EFF;">User</span></h1>
        </div>
        <div class="user-table">
            <table style="border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="width: 4%;">No</th>
                        <th style="width: 15%;">Nama</th>
                        <th style="width: 15%;">Username</th>
                        <th style="width: 15%;">Email</th>
                        <th style="width: 15%;">Alamat</th>
                        <th style="width: 15%;">Telp</th>
                        <th style="width: 20%;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if (mysqli_num_rows($query_get_user) > 0):
                            $no = $offset + 1; // Mulai nomor berdasarkan halaman
                            while ($data_get_user = mysqli_fetch_array($query_get_user)):
                    ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data_get_user['nama_user']?></td>
                                    <td><?=$data_get_user['username']?></td>
                                    <td><?=$data_get_user['email_user']?></td>
                                    <td><?=$data_get_user['alamat']?></td>
                                    <td><?=$data_get_user['telp']?></td>
                                    <td><a href="updateUser.php?id_user=<?=$data_get_user['id_user']?>" class="update-btn">Update</a> | <a href="deleteUser.php?id_user=<?=$data_get_user['id_user']?>" onclick="return confirm('Are you sure want to delete this user?')" class="delete-btn">Delete</a></td>
                                </tr>       
                    <?php  
                            endwhile;     
                        endif;
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Link Pagination -->
        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?=$page - 1?>"> < </a>
            <?php endif; ?>
            
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?=$i?>" <?=$page == $i ? 'class="active"' : ''?>><?=$i?></a>
            <?php endfor; ?>
            
            <?php if ($page < $total_pages): ?>
                <a href="?page=<?=$page + 1?>"> > </a>
            <?php endif; ?>
        </div>
    </section>
</body>
</html>
