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
      height: 300px;
      background: rgba(255, 255, 255, 0.6);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .header {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 10px;
      margin-bottom: 40px;
      margin-top: -10px;
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
      width: 400px;
      background: rgba(141, 229, 219, 0.6);
      padding: 40px 25px 30px;
      border-radius: 15px;
      text-align: center;
      position: relative;
      margin-top: -10px;
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
      top: -30px;
      left: 50%;
      transform: translateX(-50%);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .notif-icon {
      width: 45px;
      height: 45px;
    }

    .notif-card h3 {
      margin-top: 30px;
      font-size: 20px;
      font-weight: bold;
      color: #333;
    }

    .notif-card p {
      color: #444;
      font-size: 16px;
      margin: 15px 0 50px;
    }

    .notif-card a {
      background-color: #3C949E;
      color: white;
      padding: 10px 25px;
      text-decoration: none;
      border-radius: 8px;
      font-size: 14px;
      font-weight: bold;
    }

    .notif-card a:hover {
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
    <p>Kamu mempunyai beberapa notifikasi</p>
    <a href="RincianNotif.php">LIHAT SELURUH NOTIFIKASI</a>
  </div>
</div>

</body>
</html>
