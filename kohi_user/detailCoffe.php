<?php
    include "header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/detailCoffe.css">
    <title>Detail Coffe</title>
</head>
<body>
    <?php
        include "koneksi.php";
        if (isset($_GET['id_produk'])) {
            $id_detail_produk = $_GET['id_produk'];
        }else{
            echo "  <script>
                        alert('The product ID was not found')
                        location.href = 'coffe.php'
                    </script>";
        }

        $query_detail_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = '".$id_detail_produk."'");
        $data_detail_produk = mysqli_fetch_array($query_detail_produk);
    ?>
    <div class="detail-coffe-page">
        <div class="detail-coffe-content">
            <div class="detail-coffe-card">
                <div class="detail-coffe-image">
                    <img src="../images/<?=$data_detail_produk['foto_produk']?>" alt="gambar produk">
                </div>

                <div class="detail-coffe-info">
                    <form action="insertCart.php?id_buku<?=$data_detail_produk['id_produk']?>" method="post">
                        <div class="coffe-name-price-desc">
                            <div class="coffe-name-price">
                                <h1><?=$data_detail_produk['nama_produk']?></h1>
                                <h1>IDR <?=number_format($data_detail_produk['harga_produk'], 0,',', '.') ?></h1>
                            </div>
                            <div class="coffe-desc">
                                <p><?=$data_detail_produk['deskripsi_produk']?></p>
                            </div>
                        </div>

                        <div class="product-stock-qty">
                            <p><b>Stok: </b><?=$data_detail_produk['stok_produk']?></p>
                            <div class="qty-container">
                                <button class="qty-btn minus" type="button">-</button>
                                <input type="number" name="qty" value="1" min="1" class="qty-input">
                                <button class="qty-btn plus" type="button">+</button>
                            </div>
                        </div>

                        <div class="product-button">
                            <input type="submit" value="Order">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const minusBtn = document.querySelector('.minus');
        const plusBtn = document.querySelector('.plus');
        const qtyInput =document.querySelector('.qty-input');

        minusBtn.addEventListener('click', () => {
            let currentValue = parseInt(qtyInput.value);
            if (currentValue > 1) {
                qtyInput.value = currentValue - 1;
            }
        });

        plusBtn.addEventListener('click', () => {
            let currentValue = parseInt(qtyInput.value);
            qtyInput.value = currentValue + 1;
        });
    </script>
</body>
</html>

<?php
    include "footer.php"
?>