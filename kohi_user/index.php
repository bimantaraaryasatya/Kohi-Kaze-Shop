<?php
    include "header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Home</title>
</head>
<body>
    <section class="home-section">
        <div class="home-content">
            <div class="home-text">
                <h4>Welcome, <span>Kohi Lovers</span></h4>
                <h1>We Serve the richest <br> coffe in the city!</h1>
            </div>
            <div class="home-button">
                <a href="#menu">Get Your Coffe</a>
            </div>
        </div>
    </section>

    <section class="menu" id="menu">
        <div class="menu-title">
            <h1>Menu</h1>
        </div>
        <div class="card-box">
            <?php
                require "koneksi.php";
                $counter = 0;
                $query_kopi = mysqli_query($conn, "SELECT * FROM produk");
                while ($data_kopi = mysqli_fetch_array($query_kopi)) {
                    if ($counter >= 4) {
                        break;
                    }
            ?>
                    <div class="menu-card">
                        <div class="menu-img">
                            <img src="../images/<?= $data_kopi['foto_produk']?>" alt="latte image">
                        </div>
                        <div class="menu-info">
                            <div class="menu-text">
                                <h2><?= $data_kopi['nama_produk']?></h2>
                                <p><?= $data_kopi['deskripsi_produk']?></p>
                            </div>
                            <div class="menu-price-button">
                                <h3>IDR <?=number_format($data_kopi['harga_produk'], 0, ',', '.')?></h3>
                                <div class="menu-button">
                                    <a href="detailCoffe.php?id_produk=<?= $data_kopi['id_produk']?>">Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            ?>
        </div>
    </section>
</body>
</html>

<?php
    include "footer.php"
?>