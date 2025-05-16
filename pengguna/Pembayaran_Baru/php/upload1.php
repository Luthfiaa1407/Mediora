<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Konfirmasi Pembayaran - Mediora</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #cceeee;
      background-image: url('../image/Bg full.png'); /* Ganti sesuai path */
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      backdrop-filter: blur(2px);
    }

    .outer-box {
      background: rgba(255, 255, 255, 0.6);
      border-radius: 20px;
      padding: 40px 30px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.1);
      max-width: 900px;
      width: 100%;
      box-sizing: border-box;
      text-align: center;
    }

    .logo {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 20px;
      margin-bottom: 20px;
    }

    .logo img {
      height: 48px;
    }

    .logo-texts {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      line-height: 1.2;
    }

    .logo-texts .mediora-text {
      font-size: 16px;
      font-weight: 400;
      color: #555;
      margin: 0;
      padding: 0;
    }

    .logo-texts .checkout-text {
      font-size: 32px;
      font-weight: 700;
      color: #333;
      margin-top: -4px;
    }

    .subtitle {
      font-size: 28px;
      font-weight: 500;
      color: #2b2b2b;
      text-align: center;
      margin-top: 10px;
      margin-bottom: 40px;
      padding: 10px 0;
    }

    .inner-box {
      background-color: #ffffff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
      text-align: left;
       margin-top: 25px;
        border: 2px solid #9BD8DB; 
    }

    h3 {
      font-size: 18px;
      font-weight: 600;
      color: #222;
      text-align: center;
      margin-bottom: 25px;
      letter-spacing: 0.8px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"] {
      width: 97%;
      padding: 12px;
      border: 2px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }

    .radio-group {
      display: flex;
      gap: 20px;
      margin-top: 8px;
    }

    .radio-group label {
      display: flex;
      align-items: center;
      font-weight: normal;
      gap: 5px;
    }

    .upload-wrapper {
      background-color: #e0f6f7;
      border-radius: 8px;
      padding: 8px 12px;
      border: 2px solid #ccc;
    }

    .upload-wrapper input[type="file"] {
      border: none;
      background: none;
      width: 100%;
      font-size: 14px;
    }

    .submit-btn {
      width: 100%;
      padding: 12px 24px;
      background-color: #0fa5a0;
      color: white;
      font-weight: bold;
      text-align: center;
      border-radius: 7px;
      text-decoration: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 25px;
      border: none;
      font-size: 16px;
    }

    .submit-btn:hover {
      background-color: #0c837f;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="outer-box">
      <div class="logo">
        <img src="../image/logo.png" alt="Logo" />
        <div class="logo-texts">
         
          <span class="checkout-text">Pembayaran</span>
        </div>
      </div>

      <span class="subtitle">Konfirmasi Pembayaran</span>

      <div class="inner-box">
        <h3>Silahkan Upload Bukti Pembayaran</h3>

        <form id="paymentForm" action="upload3.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" id="nama" name="nama" placeholder="Silahkan isi disini" required />
          </div>

          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="radio-group">
              <label><input type="radio" name="gender" value="L" required> L</label>
              <label><input type="radio" name="gender" value="P"> P</label>
            </div>
          </div>

          <div class="form-group">
            <label for="bukti">Upload Bukti Pembayaran</label>
            <div class="upload-wrapper">
              <input type="file" id="bukti" name="bukti" accept="image/*" required />
            </div>
          </div>

          <button type="submit" class="submit-btn">SUBMIT</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
      const nama = document.getElementById('nama').value.trim();
      const gender = document.querySelector('input[name="gender"]:checked');
      const bukti = document.getElementById('bukti').files.length;

      if (!nama || !gender || bukti === 0) {
        alert('Harap lengkapi semua data sebelum submit.');
        event.preventDefault();
      }
    });
  </script>
</body>
</html>
