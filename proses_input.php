<?php

include './koneksi.php';
$nama_penyewa = $_POST['nama_penyewa'];
$tanggal_penyewaan = $_POST['tanggal_penyewaan'];
$tipe_mobil = $_POST['tipe_mobil'];
$durasi_peminjaman = $_POST['durasi_peminjaman'];
$email = $_POST['email'];

$query = "INSERT INTO rental_mobil VALUES(NULL, '$nama_penyewa','$tanggal_penyewaan', '$tipe_mobil', '$durasi_peminjaman', '$email')";
mysqli_query($koneksi, $query);

header("Location: ./index.php");
exit;