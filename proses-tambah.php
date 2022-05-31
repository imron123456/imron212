<?php
include("connect.php");

if (isset($_POST['daftar'])) {
  
    $NAMA = $_POST['NAMA'];
    $ALAMAT = $_POST['ALAMAT'];
    $TELEPON = $_POST['TELEPON'];
    $PRODI = $_POST['PRODI'];
   

    mysqli_query($db, "INSERT INTO mahasiswa VALUES
    ('','$NAMA', '$ALAMAT', '$TELEPON', '$PRODI')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}
