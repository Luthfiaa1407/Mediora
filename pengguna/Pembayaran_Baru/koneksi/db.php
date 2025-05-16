<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // ganti jika ada password
$db   = 'pembayaran'; // ganti dengan nama database Anda

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
