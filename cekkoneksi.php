<?php
require 'koneksi.php';
$query = "SELECT * FROM mahasiswa";
$mahasiswa = mysqli_query($conn, $query);

var_dump($mahasiswa);
?>