<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP | Tambah Data Identitas</title>
    <link rel="stylesheet" type="text/css" href="latihan.css">
</head>

<body>
    <header>
        <h3>TAMBAHKAN IDENTITAS</h3>
    </header>
    <form action="proses-tambah.php" method="POST">
        <fieldset>
            

            <p>
                <label for="NAMA">NAMA: </label>
                <input type="text" name="NAMA" placeholder="NAMA" />
            </p>
            <p>
                <label for="ALAMAT">ALAMAT: </label>
                <textarea name="ALAMAT"></textarea>
            </p>
            <p>
                <label for="TELEPON">TELEPON: </label>
                <textarea name="TELEPON"></textarea>
            </p>
           
            <p>
                <label for="PRODI">PRODI: </label>
                <input type="text" name="PRODI" placeholder="PRODI" />
            </p>
            <p>
                <input type="submit" value="Daftar" name="daftar" />
            </p>

        </fieldset>

    </form>

</body>

</html>