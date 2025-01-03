<?php 
$host = 'localhost';
$username = 'root';
$password = ''; 
$dbname = 'dbscuti';

// Membuat koneksi
$conn = mysqli_connect($host, $username, $password, $dbname, 3307); // Ganti 3306 dengan port MySQL jika berbeda


// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
