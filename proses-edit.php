<?php
include("connect.php");

if (isset($_POST['simpan'])) {

    $ID_MAHASISWA=$_POST['ID_MAHASISWA'];
    $NAMA = $_POST['NAMA'];
    $ALAMAT = $_POST['ALAMAT'];
    $TELEPON = $_POST['TELEPON'];
    $PRODI = $_POST['PRODI'];
    
    $sql = "UPDATE `mahasiswa` SET `NAMA` = '$NAMA', `ALAMAT` = '$ALAMAT', `TELEPON` = '$TELEPON', `PRODI` = '$PRODI' WHERE `mahasiswa`.`ID_MAHASISWA` = $ID_MAHASISWA;";
    $query = mysqli_query($db, $sql);
    header('Location: index.php');
}
