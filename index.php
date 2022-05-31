<!DOCTYPE html>
<html>

<head>
    <title>Belajar PHP - Tampilkan Data Identitas</title>
    <link rel="stylesheet" type="text/css" href="latihan.css">
</head>

<body>

    <a href="tambah.php">+ TAMBAH IDENTITAS</a>
    <br />
    <br />
    <table border="1" id="customer">
        <tr>
            <th>NO</th>
            <th>ID_MAHASISWA</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TELEPON</th>
            <th>PRODI</th>
            <th>AKSI</th>
            
            
        </tr>
        <?php
        include 'connect.php';
        $no = 1;
        $data = mysqli_query($db, "SELECT * FROM mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['ID_MAHASISWA']; ?></td>
                <td><?php echo $d['NAMA']; ?></td>
                <td><?php echo $d['ALAMAT']; ?></td>
                <td><?php echo $d['TELEPON']; ?></td>
                <td><?php echo $d['PRODI']; ?></td>
               
                <td>
                    <div class="aksi-edit">
                        <a href="edit.php?id=<?php echo $d['ID_MAHASISWA']; ?> "class="button1">EDIT</a>
                    </div>

                    <div class="aksi-hapus">
                        <a href="hapus.php?id=<?php echo $d['ID_MAHASISWA']; ?>"class="button2">HAPUS</a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>