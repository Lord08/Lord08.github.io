<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
echo template_header('Home');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <div class = "content">
        <h1>Daftar Mahasiswa</h1>
        <a href="tambah.php">+ Tambah Data Baru</a>
        <br><br>
    
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["Nim"]; ?></td>
                    <td><?= $row["Nama"]; ?></td>
                    <td><?= $row["Email"] ?></td>
                    <td><?= $row["Jurusan"] ?></td>
                    <td><img src="photo/<?= $row["Gambar"] ?>" width="50"></td>
                    <td><a href="edit.php">edit</a> |
                        <a href="delete.php">delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>

<? = template_footer() ?>