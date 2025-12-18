<form action="simpan_survey.php" method="post" enctype="multipart/form-data">
    <h3>Survei Lingkungan Sekolah</h3>

    Kebersihan Sekolah:
    <select name="kebersihan">
        <option>Baik</option>
        <option>Cukup</option>
        <option>Buruk</option>
    </select><br>

    Fasilitas Lingkungan:
    <select name="fasilitas">
        <option>Lengkap</option>
        <option>Cukup</option>
        <option>Tidak Lengkap</option>
    </select><br>

    Penghijauan:
    <select name="penghijauan">
        <option>Banyak</option>
        <option>Cukup</option>
        <option>Kurang</option>
    </select><br>

    Bukti Foto:
    <input type="file" name="foto" required><br>

    <button type="submit">Kirim Survei</button>
</form>
