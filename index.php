<?php
session_start();
include "config/database.php";

if (isset($_POST['login'])) {
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE nama='$nama' AND password='$password'");
    if (mysqli_num_rows($query) > 0) {
        $_SESSION['login'] = $nama;
        header("Location: dashboard.php");
    } else {
        echo "Login gagal";
    }
}
?>

<form method="post">
    <h2>Login Survei Lingkungan</h2>
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button name="login">Login</button>
</form>
