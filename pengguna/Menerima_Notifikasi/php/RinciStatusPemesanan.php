<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Status Pengiriman - Mediora</title>
  <style>
    body, html {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #c1ecec;
    }

    .bg {
      height: 100vh;
      background: url('../image/Bg mediora.png') no-repeat center center;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .popup {
      background: #e3fbfb;
      border-radius: 20px;
      width: 1000px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
      padding: 20px 30px;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-align: center;
    }

    .logo {
      height: 30px;
    }

    .mediping {
      height: 28px;
    }

    .content {
      margin-top: 20px;
    }

    .arrival-date {
      color: #555;
      margin-bottom: 20px;
    }

    .progress {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 15px;
      position: relative;
    }

    .step {
      display: flex;
      flex-direction: column;
      align-items: center;
      position: relative;
      flex: 1;
      text-align: center;
    }

    .step:not(:last-child)::after {
      content: '';
      position: absolute;
      top: 5px;
      right: -50%;
      width: 100%;
      height: 2px;
      background-color: #ccc;
      z-index: 0;
    }

    .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #ccc;
      z-index: 1;
    }

    .dot.active {
      background: #007e7e;
    }
    .dot.checked {
        background-color: #007e7e;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 10px;
        font-weight: bold;
    }


    .label {
      font-size: 12px;
      color: #444;
      margin-top: 5px;
    }

    .delivery-info {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      gap: 10px;
    }

    .delivery-info img {
      height: 50px;
      border-radius: 5px;
    }

    .info-text p {
      margin: 0;
    }

    .btn {
      margin-left: auto;
      background-color: #368c8c;
      color: white;
      padding: 8px 14px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .timeline {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .timeline-entry {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      position: relative;
    }

    .timeline-time {
      width: 120px;
      text-align: right;
      font-size: 14px;
      font-weight: 600;
      color: #333;
    }

    .timeline-track {
        position: relative;
        width: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 50px; 
    }


    .timeline-track .dot {
      width: 12px;
      height: 12px;
      background-color: #007e7e;
      border-radius: 50%;
      z-index: 2;
    }

    .timeline-track .line {
        position: absolute;
        top: 12px;
        height: 40px; 
        width: 2px;
        background-color: #ccc;
        z-index: 0;
    }



    .timeline-entry:last-child .timeline-track .line {
      height: 50%;
      bottom: auto;
      display: none;
    }

    .timeline-desc {
      flex: 1;
      font-size: 14px;
      color: #444;
    }

    .close-btn {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      background-color: #368c8c;
      color: white;
      border: none;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
    }
    .status-title {
        text-align: center;
        margin-top: 10px;
        font-size: 24px;
        color: #333;
    }
    .timeline-track .dot.checked {
  background-color: #007e7e;
  color: white;
  font-size: 10px;
  font-weight: bold;
  display: flex;
  justify-content: center;
  align-items: center;
}


  </style>
</head>
<body>
  <div class="bg">
    <div class="popup">
        <div class="header">
            <img src="../image/logo.png" alt="Mediora" class="logo">
                <div style="display: flex; align-items: center; gap: 8px;">
            <img src="../image/notifikasi.png" alt="MediPing" class="mediping">
            <span style="font-size: 14px; font-weight: 500; color:rgb(3, 3, 3);">MedPing</span>
        </div>
    </div>


      <div class="content">
        <h2 class="status-title">Status Pemesanan</h2>
        <p class="arrival-date">Pesanan tiba pada 12 Maret 2025</p>

        <div class="progress">
        <div class="step">
            <div class="dot checked">✔</div>
            <span class="label">Sedang Diproses</span>
        </div>
        <div class="step">
            <div class="dot checked">✔</div>
            <span class="label">Menuju Alamatmu</span>
        </div>
        <div class="step">
            <div class="dot active"></div>
            <span class="label">Pesanan Selesai</span>
        </div>
        </div>


        <div class="delivery-info">
        <img src="../image/Obat.png" alt="Kurir">
        <div class="info-text">
            <p><strong>Kurir</strong></p>
            <p>
            <span id="resi-number">O-250321-AGZVRDS</span>
            <img src="../image/copy.png" alt="Salin" 
                onclick="copyResi()" 
                style="cursor:pointer; width: 25px; height: 25px; margin-left: 2px;" 
                title="Salin nomor pengiriman">
            </p>
        </div>
        <button class="btn">Rincian Pesanan</button>
        </div>


        <hr style="border: none; border-top: 1px solid #ccc; margin: 20px 0;">

        <div class="timeline-entry">
            <div class="timeline-time">12 Maret 08.25</div>
                <div class="timeline-track">
                    <span class="line"></span>
                    <span class="dot checked"></span>
                </div>
            <div class="timeline-desc">Pesanan Selesai.</div>
        </div>
        
        <div class="timeline-entry">
            <div class="timeline-time">12 Maret 08.23</div>
                <div class="timeline-track">
                    <span class="line"></span>
                    <span class="dot checked">✔</span>
                </div>
            <div class="timeline-desc">Pesanan sedang menuju ke alamatmu.</div>
        </div>


        <div class="timeline-entry">
            <div class="timeline-time">12 Maret 08.23</div>
                <div class="timeline-track">
                    <span class="line"></span>
                    <span class="dot checked">✔</span>
                </div>
            <div class="timeline-desc">Pesanan telah diserahkan ke jasa kirim untuk diproses pengirimannya.</div>
        </div>


        <div class="timeline-entry">
            <div class="timeline-time">12 Maret 08.23</div>
                <div class="timeline-track">
                    <span class="line"></span>
                    <span class="dot checked">✔</span>
                </div>
            <div class="timeline-desc">Apotek telah mengatur pengiriman. Menunggu pesanan diserahkan ke pihak jasa kirim.</div>
        </div>
         
        <div class="timeline-entry">
            <div class="timeline-time">12 Maret 08.23</div>
                <div class="timeline-track">
                    <span class="line"></span>
                    <span class="dot checked">✔</span>
                </div>
            <div class="timeline-desc">Pesanan Diproses.</div>
        </div>
          
        <a href="StatusPemesanan.php" class="close-btn" style="display: block; text-align: center; text-decoration: none;">TUTUP</a>
        </div>
      </div>

    </div>
</div>

<script>
  function copyResi() {
    const resi = document.getElementById("resi-number").innerText;
    navigator.clipboard.writeText(resi).then(() => {
      alert("Nomor pengiriman disalin!");
    });
  }
</script>

</body>
</html>