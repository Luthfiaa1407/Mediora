<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "mediora";


$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
