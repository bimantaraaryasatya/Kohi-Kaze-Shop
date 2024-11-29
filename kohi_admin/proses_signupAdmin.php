<?php
$nama_admin = $_POST['nama_admin'];
$username_admin = $_POST['username_admin'];
$password_admin = $_POST['password_admin'];
$confirmPassword_admin = $_POST['confirmPassword_admin'];

if (empty($nama_admin) || empty($username_admin) || empty($password_admin)) {
    echo "  <script>
                alert('All fields are required. Please fill out the form completely.');
                location.href = 'createAdmin.php';
            </script>";
}elseif ($password_admin !== $confirmPassword_admin){
    echo "  <script>
                alert('Password and Confirm Password do not match. Please try again.');
                location.href = 'createAdmin.php';
            </script>";
}else{
    include "../kohi_user/connection.php";

    $usernameAdmin_check = mysqli_query($conn, "SELECT * FROM admin WHERE username_admin = '$username_admin'");
    if (mysqli_num_rows($usernameAdmin_check) > 0){
        echo "  <script>
                    alert('Username already exists. Please choose a different username.');
                    location.href = 'createAdmin.php';
                </script>";
    }else{
        $hashed_password = password_hash($password_admin, PASSWORD_DEFAULT);
        $insert = mysqli_query($conn, "INSERT INTO admin (nama_admin, username_admin, password_admin) VALUES ('".$nama_admin."', '".$username_admin."', '".$hashed_password."')");
        if ($insert) {
            echo "  <script>
                        alert('You have registered successfully. Thank you for signing up.');
                        location.href = 'createAdmin.php';
                    </script>";
        }else{
            echo "  <script>
                        alert('Registration failed. Please ensure all fields are filled correctly.');
                        location.href = 'createAdmin.php';
                    </script>";
        }
    }
}