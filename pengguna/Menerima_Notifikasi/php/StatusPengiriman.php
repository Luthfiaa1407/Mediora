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
      width: 600px;
      height: 400px;
      background: rgba(255, 255, 255, 0.6);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .top-bar {
      position: absolute;
      top: 20px;
      left: 30px;
      right: 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .top-bar img {
      height: 25px;
    }

    .top-bar .mediping {
      font-size: 20px;
      font-weight: 600;
      color: #333;
    }

    .notif-card {
      width: 400px;
      height: 200px;
      background: rgba(141, 229, 219, 0.6);
      padding: 40px 25px 30px;
      border-radius: 15px;
      text-align: center;
      margin-top: 15px;
      position: relative;
    }

    .notif-card h3 {
        margin-top: -10px;
      font-size: 20px;
      font-weight: regular;
      color: #333;
    }

    .notif-card p {
      color: #444;
      font-size: 16px;
      margin: 15px 0 50px;
      margin-top: -10px;
      text-align: center;
    }

    .notif-card a {
      background-color: #3C949E;
      color: white;
      padding: 10px 25px;
      text-decoration: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: bold;
      margin-top: 45px;
      display: inline-block;
    }

    .notif-card a:hover {
      background-color:rgb(69, 112, 117);
    }

    /* Tombol Tutup */
    .tutup-button {
      position: absolute;
      bottom: 15px;
      right: 15px;
      background-color: #3C949E;
      color: white;
      padding: 8px 16px;
      text-decoration: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: bold;
    }

    .tutup-button:hover {
      background-color: rgb(69, 112, 117);
    }
  </style>
</head>
<body>

<div class="popup">
  <div class="top-bar">
    <img src="../image/logo.png" alt="logo Mediora">
    <div class="mediping">
    <img src="../image/notifikasi.png" alt="logo MedPing">MedPing</div>
  </div>
    <h3> Status Pengiriman </h3>
  <div class="notif-card">
    <p>Menuju Alamatmu</p>
    <p>Saat ini pengiriman anda sedang dalam perjalanan</p>
    <a href="RinciStatusPengiriman.php">Lihat detail  status pengiriman</a>
    
  </div>
  <a href="RincianNotif.php" class="tutup-button">TUTUP</a>
</div>

</body>
</html>
