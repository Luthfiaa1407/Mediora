<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $query = $koneksi->query("SELECT * FROM pemesanan WHERE id = $id");
    $data = $query->fetch_assoc();

    if (!$data) {
        die("Data tidak ditemukan untuk ID $id.");
    }
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
      font-family: 'Poppins', sans-serif;
      background: url('../image/Bg full.png') no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .checkout-container {
      max-width: 900px;
      background-color: rgba(255,255,255,0.48);
      margin: 40px auto;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      text-align: center;
    }

    .logo-header {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 10px;
    }

    .logo-header img {
      height: 28px;
    }

    .logo-header h2 {
      font-weight: 600;
      margin: 0;
      font-size: 20px;
      color: #333;
    }

    .subtitle {
      font-size: 40px;
      font-weight: 600;
      color:rgb(0, 0, 0);
      margin-top: 5px;
    }

    .detail-title {
      margin-top: 20px;
      font-size: 16px;
      font-weight: bold;
      color: #333;
      letter-spacing: 1px;
    }

    .qr-detail {
      background: white;
      padding: 20px;
      border-radius: 15px;
      margin-top: 15px;
      border: 1px solid #ddd;
    }

    .qr-flex {
      display: flex;
      gap: 20px;
      justify-content: center;
      align-items: flex-start;
    }

    .detail-title-inside {
      font-size: 25px;
      font-weight: bold;
      color: #333;
      margin-bottom: 15px;
      letter-spacing: 5px;
    }

    .qr-detail img {
      width: 270px;
      height: 270px;
    }

    .qr-text p {
      display: flex;
      margin: 19px 0;
      font-size: 15px;
      text-align: left;
      color: #333;
    }
    .qr-img-wrapper {
      text-align: center;
      margin-bottom: 15px;
    }

    .qr-img-wrapper img {
      width: 280px;
      height: 280px;
    }

    .scan-text {
      font-size: 19px;
      color: black;
      text-align: center;
      margin-top: 8px;
    }

    .qr-text p span.label {
      width: 190px; 
      flex-shrink: 0;
    }

    .qr-text p span.value {
      flex: 1;
    }

    .btn-kembali {
      margin-top: 25px;
      background-color: #1c9c98;
      color: white;
      border: none;
      padding: 12px 360px;
      border-radius: 10px;
      font-size: 15px;
      cursor: pointer;
      text-decoration: none;
      display: inline-block;
    }

    .btn-kembali:hover {
      background-color: #157d7a;
    }
    
  </style>
</head>
<body>

  <div class="checkout-container">
    <div class="logo-header">
      <img src="../image/logo.png" alt="Logo">
      <h2><span style="  font-weight: bold;">Checkout</span></h2>
    </div>

    <div class="subtitle">Kode Pembayaran</div>


    <div class="qr-detail">
    <div class="detail-title-inside">Detail Pesanan</div>
    <div class="qr-flex">
    <div class="qr-img-wrapper">
    <img src="<?= $data['qr_code']; ?>" alt="QR Code" onerror="this.src='../image/qr.png'">

        <div class="scan-text">Silahkan scan kode pembayaran</div>
      </div>
        <div class="qr-text">
        <p><span class="label">Nama Pemesan</span> : <span class="value"><?= $data['nama_pemesan']; ?></span></p>
        <p><span class="label">Jenis Obat</span> : <span class="value"><?= $data['jenis_obat']; ?></span></p>
        <p><span class="label">Nama Obat</span> : <span class="value"><?= $data['nama_obat']; ?></span></p>
        <p><span class="label">Jumlah Pesanan</span> : <span class="value"><?= $data['jumlah']; ?></span></p>
        <p><span class="label">No. Handphone</span> : <span class="value"><?= $data['no_hp']; ?></span></p>
        <p><span class="label">Alamat</span> : <span class="value"><?= $data['alamat']; ?></span></p>
        <p><span class="label">Nomor Pesanan</span> : <span class="value"><?= $data['nomor_pesanan']; ?></span></p>
        <p><span class="label">Total Pembayaran</span> : <span class="value">Rp <?= number_format($data['total_pembayaran'], 0, ',', '.'); ?></span></p>
        </div>
      </div>
    </div>

    <a href="menu pembayaran.php" class="btn-kembali">Pilih Metode Pembayaran</a>
  </div>

</body>
</html>
