<?php 

$servername = 'localhost';
$username = 'root';
$password = ''; //jika tidak ada password di kosongkan saja
$database = 'reservasi_hotel';

// membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if(!$koneksi) {
    die('Connection Failed:' . mysqli_connect_error());
}
// Query untuk menghitung total reservasi hotel
$reservasiQuery = "SELECT COUNT(*) as total_reservasi FROM tb_reservasi";
$reservasiResult = mysqli_query($koneksi, $reservasiQuery);
$reservasiData = mysqli_fetch_assoc($reservasiResult);
$totalReservasi = $reservasiData['total_reservasi'];

 ?>
