<?php
if ($_POST) {
    $username = $_POST["nama_user"];
    $password = $_POST["password_user"];

    // Cek jika username kosong
    if (empty($username)) {
        echo "<script>
                alert('Username cannot be empty. Please enter your username.');
                location.href = 'signin.php';
              </script>";
    }
    // Cek jika password kosong
    elseif (empty($password)) {
        echo "<script>
                alert('Password cannot be empty. Please enter your password.');
                location.href = 'signin.php';
              </script>";
    } 
    else {
        include "koneksi.php";

        // Query untuk mendapatkan data pengguna berdasarkan username
        $qry_login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // Cek apakah username ditemukan
        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);

            // Verifikasi password dengan hash yang ada di database
            if (password_verify($password, $dt_login['password_user'])) {
                session_start();
                $_SESSION['id_user'] = $dt_login['id_user'];
                $_SESSION['nama_user'] = $dt_login['nama_user'];
                $_SESSION['status_login'] = true;

                echo "<script>
                        alert('Login successful! Welcome back!');
                        location.href = 'index.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Username and password do not match our records. Please check your details and try again.');
                        location.href = 'signin.php';
                      </script>";
            }
        } 
        // Jika username tidak ditemukan
        else {
            echo "<script>
                    alert('Username and password do not match our records. Please check your details and try again.');
                    location.href = 'signin.php';
                  </script>";
        }
    }
}
?>
