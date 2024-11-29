<?php
if ($_POST) {
    $username = $_POST['username_admin'];
    $password = $_POST['password_admin'];

    // Cek jika username kosong
    if (empty($username)) {
        echo "<script>
                alert('Username cannot be empty. Please enter your username');
                location.href = 'signin.php';
              </script>";
    }
    // Cek jika password kosong
    elseif (empty($password)) {
        echo "<script>
                alert('Password cannot be empty. Please enter your password');
                location.href = 'signin.php';
              </script>";
    } 
    else {
        include "../kohi_user/connection.php";

        // Query untuk mendapatkan data pengguna berdasarkan username
        $qry_login = mysqli_query($conn, "SELECT * FROM admin WHERE username_admin = '$username'");

        // Cek apakah username ditemukan
        if (mysqli_num_rows($qry_login) > 0) {
            $dt_login = mysqli_fetch_array($qry_login);

            // Verifikasi password dengan hash yang ada di database
            if (password_verify($password, $dt_login['password_admin'])){
                session_start();
                $_SESSION['id_admin'] = $dt_login['id_admin'];
                $_SESSION['nama_admin'] = $dt_login['nama_admin'];
                $_SESSION['status_login_admin'] = true;

                echo "<script>
                        alert('Login successful! Welcome back!');
                        location.href = 'readUser   .php';
                      </script>";
            } else {
                echo "<script>
                        alert('Username and password do not match our records. Please check your details and try again');
                        location.href = 'index.php';
                      </script>";
            }
        } 
        // Jika username tidak ditemukan
        else {
            echo "<script>
                    alert('Username and password do not match our records. Please check your details and try again');
                    location.href = 'index.php';
                  </script>";
        }
    }
}

