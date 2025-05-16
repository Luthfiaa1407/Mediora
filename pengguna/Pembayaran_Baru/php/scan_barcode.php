<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Checkout - Mediora</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #cceeee;
      background-image: url('../image/Bg full.png'); /* Ganti sesuai path server */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .background {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      backdrop-filter: blur(2px);
    }

    .outer-box {
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 0 25px rgba(235, 14, 14, 0.1);
      max-width: 860px;
      width: 100%;
      box-sizing: border-box;
    }

    .header-title {
      text-align: center;
      color: #2d5d5b;
      font-size: 28px;
      margin-top: 0;
      margin-bottom: 20px;
    }

    .header-title .logo img {
      height: 32px;
      vertical-align: middle;
      margin-right: 8px;
    }

    .header-title span {
      font-weight: bold;
      vertical-align: middle;
    }

    .checkout-card {
      background: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 5px rgba(0, 0, 0, 0.2);
      width: 800px;
      height: 500px;
      border: 2px solid #e0e0e0;
      box-sizing: border-box;
      margin: 0 auto;
    }

    .checkout-card h3 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .detail-section {
      display: flex;
      gap: 20px;
      justify-content: space-between;
    }

    .qr-section {
    text-align: center;
    min-width: 290px; /* QR size */
    flex-shrink: 0;   /* Jangan biarkan menyusut */
  }

    .qr-code {
      width: 200px;
      height: 200px;
      margin-bottom: 5px;
    }

    .info-section {
      flex-grow: 1;
      font-size: 14px;
      line-height: 1.6;
      overflow-wrap: break-word;
    }

    .info-table {
      width: 100%;
      border-collapse: collapse;
    }

    .info-table td {
      padding: 6px 4px;
      vertical-align: top;
    }

    .info-table td.label {
      font-weight: bold;
      width: 140px;
      white-space: nowrap;
    }

    .upload-button {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background-color: #0fa5a0;
      border: none;
      border-radius: 6px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .upload-button:hover {
      background-color: #0c837f;
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
  .sub-title {
  text-align: center;
  color: #000000;
  font-size: 22px;
  margin-top: 0;
  margin-bottom: 20px;
}

  </style>
</head>
<body>
  <div class="background">
    <div class="outer-box">
      <h2 class="header-title">
        <span class="logo">
          <img src="../image/logo.png" alt="Logo" />
        </span>
        <span>Pembayaran</span>
      </h2>
      <h3 class="sub-title">Kode Pembayaran</h3>


      <div class="checkout-card">
        <h3>Detail Pesanan</h3>

        <div class="detail-section">
          <div class="qr-section">
            <img
              src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=O-250321-AGZVRDJ"
              alt="QR Code"
              class="qr-code"
            />
            <p>Silahkan scan kode pembayaran</p>
          </div>

          <div class="info-section">
            <table class="info-table">
              <tr>
                <td class="label">Nama Pemesan</td>
                <td>: Cahya Nerissa</td>
              </tr>
              <tr>
                <td class="label">Jenis Obat</td>
                <td>: Oftalmik</td>
              </tr>
              <tr>
                <td class="label">Nama Obat</td>
                <td>: Cendo Hyalub</td>
              </tr>
              <tr>
                <td class="label">Jumlah Pesanan</td>
                <td>: 1 Botol</td>
              </tr>
              <tr>
                <td class="label">No. Handphone</td>
                <td>: 082269488325</td>
              </tr>
              <tr>
                <td class="label">Alamat</td>
                <td>: Jl. Bumi Bulat, Kp. Baru, Kec. Kedaton, Kota Bandar Lampung, Lampung 35141, Indonesia</td>
              </tr>
              <tr>
                <td class="label">Nomor Pesanan</td>
                <td>: O-250321-AGZVRDJ</td>
              </tr>
              <tr>
                <td class="label">Total Pembayaran</td>
                <td>: Rp 50.000</td>
              </tr>
            </table>
          </div>
        </div>

       <a href="upload1.php" class="button-link">UPLOAD BUKTI PEMBAYARAN</a>
      </div>
    </div>
  </div>
</body>
</html>
