<?php

include "connect.php";

$id = $_GET['id'];
$data = mysqli_query($db, "SELECT * FROM mahasiswa WHERE ID_MAHASISWA='$id'");
while ($d = mysqli_fetch_array($data)) {
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Belajar PHP | Edit Data</title>
    </head>

    <body>
        <header>
            <h3>Edit Identitas</h3>
        </header>

        <form action="proses-edit.php" method="POST">

            <fieldset>
            <p>
                    <label for="ID_MAHASISWA">ID_MAHASISWA: </label>
                    <input type="hidden" name="ID_MAHASISWA" placeholder="ID_MAHASISWA" value="<?php echo $d['ID_MAHASISWA']; ?>" />
                </p>
                <p>
                    <label for="NAMA">Nama: </label>
                    <input type="text" name="NAMA" placeholder="NAMA" value="<?php echo $d['NAMA']; ?>" />
                </p>
                <p>
                    <label for="ALAMAT">Alamat: </label>
                    <textarea name="ALAMAT"><?php echo $d['ALAMAT'] ?></textarea>
                </p>
                <p>
                    <label for="TELEPON">Nomor HP: </label>
                    <textarea name="TELEPON"><?php echo $d['TELEPON'] ?></textarea>
                </p>
                
                <p>
                    <label for="PRODI">Kodepos: </label>
                    <input type="text" name="PRODI" placeholder="PRODI" value="<?php echo $d['PRODI'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>

            </fieldset>


        </form>

    </body>
<?php } ?>

    </html>