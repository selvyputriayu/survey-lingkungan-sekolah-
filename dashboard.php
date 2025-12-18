<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
}
?>

<h2>Selamat Datang, <?= $_SESSION['login']; ?></h2>

<a href="survey.php">Isi Survei</a> |
<a href="edukasi.php">Edukasi Lingkungan</a> |
<a href="logout.php">Logout</a>
