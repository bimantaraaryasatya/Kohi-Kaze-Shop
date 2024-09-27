<?php
if ($_POST) {
    $username = $_POST['username'];
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email_user'];
    $alamat = $_POST['alamat_user'];
    $no_telp = $_POST['no_telp_user'];
    $password = $_POST['password_user'];
    $confirm_password = $_POST['confirm_password_user'];

    if (empty($username) || empty($nama_user) || empty($email) || empty($password) || empty($confirm_password) || empty($alamat) || empty($no_telp)) {
        echo "<script>
                alert('All fields are required. Please fill out the form completely.');
                location.href = 'signup.php';
              </script>";
    } elseif ($password !== $confirm_password) {
        echo "<script>
                alert('Password and Confirm Password do not match. Please try again.');
                location.href = 'signup.php';
              </script>";
    } else {
        include "koneksi.php";

        // cek username sudah ada atau tidak
        $username_check = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($username_check) > 0) {
            echo "<script>
                    alert('Username already exists. Please choose a different username.');
                    location.href = 'signup.php';
                  </script>";
        }else{
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert = mysqli_query($conn, "INSERT INTO user (username, nama_user, email_user, password_user, alamat, telp) VALUES ('$username', '$nama_user', '$email', '$hashed_password', '$alamat', '$no_telp')");
            if ($insert) {
                echo "<script>
                        alert('You have registered successfully. Thank you for signing up.');
                        location.href = 'signin.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Registration failed. Please ensure all fields are filled correctly.');
                        location.href = 'signup.php';
                      </script>";
            }
        }
    }
}
?>
