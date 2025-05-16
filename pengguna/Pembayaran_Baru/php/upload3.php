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
      position: relative;
      min-height: 100vh;
    }

    /* Kotak putih detail transaksi */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      position: relative;
      z-index: 1; /* di bawah overlay */
    }

    .card {
      background: rgba(255, 255, 255, 0.5);
      border-radius: 16px;
      padding: 30px 40px;
      max-width: 700px;
      width: 90%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    /* Overlay hitam transparan */
    .overlay-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 10; /* di atas container */
      display: none; /* awalnya sembunyi */
    }

    /* Popup sukses */
   .popup {
    position: fixed;
    top: 50%;               /* Vertikal center */
    left: 50%;              /* Horizontal center */
    transform: translate(-50%, -50%);
    background-color: #00c853;
    color: white;
    font-size: 20px;
    font-weight: bold;
    padding: 15px 30px;     /* Sedikit lebih lebar kiri kanan */
    border-radius: 12px;
    display: flex;
    align-items: center;    /* Vertikal center isi */
    justify-content: center;/* Horizontal center isi */
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    z-index: 11;
    opacity: 1;
    transition: opacity 0.5s ease-out;
    display: none;
    }


    .popup i {
      margin-right: 10px;
      font-size: 22px;
    }

    /* Styling lain */
    .logo {
      text-align: center;
      margin-bottom: 15px;
    }

    .logo span {
      font-size: 22px;
      font-weight: bold;
      color: #2a9d9b;
    }

    .logo img {
      height: 30px;
      vertical-align: middle;
      margin-right: 6px;
    }

    h2 {
      text-align: center;
      font-weight: 600;
      color: #333;
      margin-bottom: 25px;
    }

    .box-detail {
    width: 100%;
    max-width: 600px;
    margin: 0 auto;
    font-family: sans-serif;
    background-color: white;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
  }

  .box-detail h2 {
    /* text-align: center; */
    margin-top: 0;
    font-size: 20px;
    letter-spacing: 1px;
  }


  .box-detail td {
    padding: 10px;
    vertical-align: top;
    font-size: 14px;
  }

  .box-detail td:first-child {
    text-align: left;
    font-weight: 500;
    width: 40%;
    color: #444;
  }

  .box-detail td:last-child {
    text-align: left;
    width: 60%;
    color: #333;
  }

  .box-detail .btn {
    display: block;
    margin: 30px auto 0;
    padding: 10px 40px;
    background-color: #2fa39c;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
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
    .button-link {
    display: block;          /* ubah dari inline-block ke block supaya width 100% efektif */
    width: 95%;             /* agar tombol lebar penuh */
    padding: 12px 24px;      /* padding bisa disesuaikan */
    background-color: #0fa5a0;
    color: white;
    font-weight: bold;
    text-align: center;
    border-radius: 7px;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 25px; 
  }
  .button-link:hover {
    background-color: #0c837f;
  }
  .popup img.icon-check {
  width: 40px;
  height: 40px;
  margin-right: 12px;
}

  </style>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- Konten utama kotak putih -->
  <div class="container">
    <div class="card">
      <div class="logo">
        <img src="../image/logo.png" alt="Logo Mediora" />
        <span>BuktiTransaksi</span>
      </div>

      <div class="box-detail">
         <h2 style="text-align: center; margin-top: 0;">Detail Transaksi</h2>
        <table>
          <tr><td>Nama Pemesan</td><td>: Cahya Nerissa</td></tr>
          <tr><td>Jenis Obat</td><td>: Oftalmik</td></tr>
          <tr><td>Nama Obat</td><td>: Cendo Hyalub</td></tr>
          <tr><td>Jumlah Pesanan</td><td>: 1 Botol</td></tr>
          <tr><td>No. Handphone</td><td>: 082269488325</td></tr>
          <tr><td>Alamat</td><td>: Jl. Bumi Bulat, Kp. Baru, Kec. Kedaton, Kota Bandar Lampung, Lampung 35141, Indonesia</td></tr>
          <tr><td>Nomor pesanan</td><td>: O-250321-AGZVRDJ</td></tr>
          <tr><td>Nomor Referensi</td><td>: Rabu, 12 Maret 2025</td></tr>
          <tr><td>Total Pembayaran</td><td>: Rp 50.000</td></tr>
        </table>
      </div>

         <a href="scan_barcode.php" class="button-link">SELESAI</a>
    </div>
  </div>

  <!-- Overlay hitam transparan -->
  <div class="overlay-bg" id="overlay"></div>

  <!-- Popup sukses -->
 <div class="popup" id="popup">
  <img src="../image/ceklis.png" alt="cek" class="icon-check" />
  <span>Pembayaran Berhasil</span>
</div>


  <script>
    window.addEventListener('load', () => {
      const overlay = document.getElementById('overlay');
      const popup = document.getElementById('popup');

      // Tampilkan overlay dan popup otomatis setelah halaman dimuat
      overlay.style.display = 'block';
      popup.style.display = 'flex';

      // Setelah 2 detik sembunyikan keduanya
      setTimeout(() => {
        popup.style.opacity = '0';
        overlay.style.display = 'none';

        // Setelah animasi opacity selesai, sembunyikan popup dan reset opacity
        setTimeout(() => {
          popup.style.display = 'none';
          popup.style.opacity = '1';
        }, 500);
      }, 2000);
    });
  </script>

</body>
</html>
