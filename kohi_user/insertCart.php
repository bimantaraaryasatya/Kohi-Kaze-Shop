<?php
    session_start();
    if ($_POST) {
        include "connection.php";
        $ID = $_GET['id_produk'];

        $query_get_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '".$_GET['id_produk']."'");
        $data_produk = mysqli_fetch_array($query_get_produk);
        $_SESSION['cart'][] = array(
            'id_produk' => $data_produk['id_produk'],
            'nama_produk' => $data_produk['nama_produk'],
            'harga_produk' => $data_produk['harga_produk'],
            'foto_produk' => $data_produk['foto_produk'],
            'stok_produk' => $data_produk['stok_produk'],
            'qty' => $_POST['qty']
        );
    }

    echo "  <script>
                alert('Product Added Successfully')
                window.location.href = 'cart.php'
            </script>";