<?php
include "config/database.php";

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
move_uploaded_file($tmp, "uploads/".$foto);

$tanggal = date("Y-m-d");

mysqli_query($conn, "INSERT INTO survey VALUES (
    null,
    '$_POST[kebersihan]',
    '$_POST[fasilitas]',
    '$_POST[penghijauan]',
    '$foto',
    '$tanggal'
)");

echo "Survei berhasil disimpan";
?>
