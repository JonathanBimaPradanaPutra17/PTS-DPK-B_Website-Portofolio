<?php
$host = "localhost"; // Sesuaikan dengan host database
$user = "root"; // Default user MySQL di Laragon
$pass = ""; // Kosongkan jika pakai Laragon
$dbname = "my_website"; // Nama database

$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
