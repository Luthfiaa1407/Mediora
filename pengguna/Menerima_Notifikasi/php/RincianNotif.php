<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>MediPing - Notifikasi</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('../image/Bg mediora.png') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .popup {
      width: 650px;
      background: rgba(255, 255, 255, 0.6);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
    }

    .header {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-bottom: 30px;
    }

    .logo-kiri img {
      height: 25px;
    }

    .logo-kanan {
      font-size: 20px;
      font-weight: 600;
      color: #333;
    }

    .notif-card {
      width: 420px;
      background: rgba(141, 229, 219, 0.6);
      padding: 40px 30px 30px;
      border-radius: 15px;
      text-align: center;
      position: relative;
    }

    .notif-circle {
      width: 70px;
      height: 70px;
      background-color: #089BAA;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      top: -35px;
      left: 50%;
      transform: translateX(-50%);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .notif-icon {
      width: 40px;
      height: 40px;
    }

    .notif-card h3 {
      margin-top: 45px;
      font-size: 20px;
      font-weight: bold;
      color: #333;
    }

    .notif-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin: 10px 0;
      font-size: 14px;
      color: #333;
    }

    .notif-row button {
      background-color: #3C949E;
      border: none;
      color: white;
      font-weight: bold;
      padding: 5px 15px;
      border-radius: 10px;
      cursor: pointer;
    }

    .notif-row button:hover {
      background-color: #2b6d75;
    }

    .notif-list {
      margin-top: 20px;
      text-align: left;
    }

    .notif-list .notif-row {
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      padding-bottom: 5px;
    }
    .open-button {
        background-color: #3C949E;
        color: white;
        font-weight: bold;
        padding: 5px 15px;
        border-radius: 10px;
        text-decoration: none;
        font-size: 14px;
    }

    .open-button:hover {
        background-color: #2b6d75;
    }

  </style>
</head>
<body>

<div class="popup">
  <div class="header">
    <div class="logo-kiri">
      <img src="../image/logo.png" alt="logo Mediora">
    </div>
    <div class="logo-kanan">MediPing</div>
  </div>

  <div class="notif-card">
    <div class="notif-circle">
      <img src="../image/notifikasi.png" alt="Notifikasi" class="notif-icon">
    </div>
    <h3>Notifikasi</h3>

    <div class="notif-list">
        <div class="notif-row">
            <span>Status Pembayaran</span>
            <a href="StatusPembayaran.php" class="open-button">OPEN</a>
        </div>
        <div class="notif-row">
            <span>Status Pemesanan</span>
            <a href="StatusPemesanan.php" class="open-button">OPEN</a>
        </div>
        <div class="notif-row">
            <span>Status Pengiriman</span>
            <a href="StatusPengiriman.php" class="open-button">OPEN</a>
        </div>
    </div>


  </div>
</div>

</body>
</html>
