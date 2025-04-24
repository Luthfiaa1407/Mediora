<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id']; 
    $query = $koneksi->query("SELECT * FROM pemesanan WHERE id = $id");
    $data = $query->fetch_assoc();
} else {
    die("ID tidak ditemukan dalam URL.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kode Pembayaran</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url('../image/background.jpg') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .checkout-container {
      max-width: 600px;
      background-color: #f8fdfd;
      margin: 50px auto;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
    }

    .qr-detail {
      background: white;
      padding: 20px;
      border-radius: 15px;
      margin-top: 20px;
      text-align: left;
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: center;
    }

    .qr-detail img {
      width: 140px;
      height: 140px;
    }

    .qr-text p {
      margin: 5px 0;
      font-size: 14px;
    }

    .qr-text p span {
      font-weight: bold;
    }

    .btn-kembali {
      margin-top: 30px;
      background-color: #1c9c98;
      color: white;
      border: none;
      padding: 12px 30px;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-kembali:hover {
      background-color: #157d7a;
    }

    h2 {
      color: #2a8a8d;
    }
  </style>
</head>
<body>

  <div class="checkout-container">
    <h2>Kode Pembayaran</h2>

    <div class="qr-detail">
      <img src="<?= $data['qr_code']; ?>" alt="QR Code">
      <div class="qr-text">
        <p><span>Nama Pemesan</span> : <?= $data['nama_pemesan']; ?></p>
        <p><span>Jenis Obat</span> : <?= $data['jenis_obat']; ?></p>
        <p><span>Nama Obat</span> : <?= $data['nama_obat']; ?></p>
        <p><span>Jumlah Pesanan</span> : <?= $data['jumlah']; ?></p>
        <p><span>No. Handphone</span> : <?= $data['no_hp']; ?></p>
        <p><span>Alamat</span> : <?= $data['alamat']; ?></p>
        <p><span>Nomor Pesanan</span> : <?= $data['nomor_pesanan']; ?></p>
        <p><span>Total Pembayaran</span> : Rp <?= number_format($data['total_pembayaran'], 0, ',', '.'); ?></p>
      </div>
    </div>

    <a href="checkout_metode.php" class="btn-kembali">Pilih Metode Pembayaran</a>
  </div>

</body>
</html>
