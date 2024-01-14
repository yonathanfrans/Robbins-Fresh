<?php
include 'db_conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        // Proses Registrasi
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Registrasi berhasil
            echo "<script>alert('Registrasi berhasil. Silakan login.'); window.location.href = 'login.php';</script>";
        } else {
            // Registrasi gagal
            echo "<script>alert('Registrasi gagal. Mohon coba lagi.');</script>";
        }
    } elseif (isset($_POST['login'])) {
        // Proses Login
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            // Login berhasil
            session_start();
            $_SESSION['username'] = $username;

            // Arahkan pengguna ke halaman lain
            header("Location: payment.php");
            exit();
        } else {
            // Login gagal
            echo "<script>alert('Login gagal. Mohon cek kembali username dan password.');</script>";
        }
    }
}
?>
