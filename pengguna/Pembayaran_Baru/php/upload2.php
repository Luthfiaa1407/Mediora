<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Bukti Transaksi - Mediora</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: url('../image/bg full.png') no-repeat center center fixed;
      background-size: cover;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }

    .card {
      background: rgba(255, 255, 255, 0.8);
      border-radius: 20px;
      padding: 30px 40px;
      max-width: 700px;
      width: 100%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .logo {
      text-align: center;
      margin-bottom: 10px;
    }

    .logo span {
      font-size: 22px;
      font-weight: bold;
      color: #2a9d9b;
    }

    .logo img {
      height: 30px;
      vertical-align: middle;
      margin-right: 5px;
    }

    h2 {
      text-align: center;
      font-weight: 600;
      color: #333;
      margin-bottom: 25px;
    }

    .box-detail {
      background-color: white;
      border: 2px solid #9de0df;
      border-radius: 10px;
      padding: 20px;
      line-height: 1.8;
      color: #333;
      font-size: 15px;
    }

    .box-detail table {
      width: 100%;
      border-collapse: collapse;
    }

    .box-detail td {
      padding: 5px 0;
      vertical-align: top;
    }

    .box-detail td:first-child {
      width: 160px;
      font-weight: bold;
    }

    .finish-btn {
      margin-top: 30px;
      background-color: #2a9d9b;
      color: white;
      border: none;
      width: 100%;
      padding: 14px;
      font-size: 16px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
    }

    .finish-btn:hover {
      background-color: #1f7c7b;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="logo">
        <img src="../image/logo.png" alt="Logo Mediora" />
        <span>BuktiTransaksi</span>
      </div>

      <h2>Detail Transaksi</h2>

      <div class="box-detail">
        <table>
          <tr><td>Nama Pemesan</td><td>: Cahya Nerissa</td></tr>
          <tr><td>Jenis Obat</td><td>: Oftalmik</td></tr>
          <tr><td>Nama Obat</td><td>: Cendo Hyalub</td></tr>
          <tr><td>Jumlah Pesanan</td><td>: 1 Botol</td></tr>
          <tr><td>No. Handphone</td><td>: 082269488325</td></tr>
          <tr><td>Alamat</td><td>: Jl. Bumi Bulat, Kp. Baru, Kec. Kedaton, Kota Bandar Lampung, Lampung 35141, Indonesia</td></tr>
          <tr><td>Nomor pesanan</td><td>: O-250321-AGZVRDJ</td></tr>
          <tr><td>Nomor Referensi</td><td>: Rabu, 12 Maret 2025</td></tr>
          <tr><td>Metode Pembayaran</td><td>: Transfer Bank - Bank Negara Indonesia</td></tr>
          <tr><td>Total Pembayaran</td><td>: Rp 50.000</td></tr>
        </table>
      </div>

      <button class="finish-btn">SELESAI</button>
    </div>
  </div>
</body>
</html>
