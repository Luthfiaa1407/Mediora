<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertanyaan Umum - Mediora</title>
    
    <style>
        header {
            background-color: #9BD8DB;
            padding: 1px;
            display: flex;
            align-items: center;
            justify-content: space-between; 
            border-bottom: 2px solid #b6e3df;
            position: fixed; 
            top: 0; 
            left: 0;
            width: 100%; 
            z-index: 1000; 
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); 
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('../image/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 30px;
            text-align: center;
            margin-top: 80px; 
        }


        header a {
            text-decoration: none;
            color: #000;
        }
        header a img{
            width: 17px;
            height: 17px;
            margin-left: 25px;     
        }

        header img {
            width: 85px;
            height: 50px;
            margin-left: auto; 
        }


        .right-section {
            width: 600px; 
            margin-left: auto;
            margin-right: 200px; 
            text-align: center;
        }

        .pengiriman-box {
            background-image: url('../image/pengiriman box.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            
            border-radius: 20px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto 40px auto;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .pengiriman-item {
            margin-bottom: 20px;
            border: none;
        }

        .pengiriman-question {
            padding: 15px;
            background-color: #ffffff;
            border-radius: 15px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            list-style: none;
            text-align: left;
            position: relative; 
            user-select: none; 
            white-space: normal;         /* biar teks bisa wrap */
            word-break: break-word;     /* biar kata panjang dipecah */
            line-height: 1.5;           /* kasih jarak antar baris */
            padding-right: 40px; 
            min-height: 50px;
        }


        .pengiriman-question::after {
            content: "";
            position: absolute;
            right: 15px; 
            top: 50%;
            transform: translateY(-50%); 
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #000; 
            transition: transform 0.3s ease;
        }


        details[open] .pengiriman-question::after {
            transform: translateY(-50%) rotate(360deg); 
            border-top: none;
            border-bottom: 8px solid #000; 
        }



        .pengiriman-answer {
            background-color: #ffffff;
            margin-top: 10px;
            padding: 15px;
            border-radius: 10px;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            text-align: left; 
        }


        .topics {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            gap: 80px;
            margin-top: 20px;
        }

        .topic-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100px;
            transform: none;
        }

        .topic {
            background-color: #F1F9FB;
            border-radius: 45%;
            padding: 15px;
            width: 136px;
            height: 80px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .topic:hover {
            transform: translateY(-5px);
        }

        .topic img {
            width: 85px;
            height: 50px;
        }

        .topic-label {
            margin-top: 8px;
            font-size: 14px;
        }

    </style>
</head>

<body>
    <header>
        <a href="#"><img src="../image/panah.png" alt="panah"> Pertanyaan Umum</a>
        <img src="../image/logo.png" alt="logo">
    </header>

    <div class="container">
    <div class="right-section">
        <h2>Pengiriman</h2>

    <div class="pengiriman-box">
        <details class="pengiriman-item">
            <summary class="pengiriman-question">Berapa lama waktu yang dibutuhkan untuk melakukan pengiriman pembelanjaan dari Mediora?</summary>
            <div class="pengiriman-answer">
            Produk akan dikirim maksimal 2 jam setelah pembayaran sukses, sesuai jam operasional apotek (08.00-22.00 WIB). Untuk pesanan yang masuk di luar jam operasional, pengiriman akan dilakukan paling lambat 2 hari kerja (H+2) setelah pembayaran berhasil.
            </div>
        </details>

    <details class="pengiriman-item">
        <summary class="pengiriman-question">Kenapa pesanan yang dikirim dari apotek belum saya terima setelah 1 x 24 jam?  </summary>
        <div class="pengiriman-answer">
        Jika pesanan belum dikirim setelah 1 x 24 jam, Anda dapat menghubingin nomor telpon 072436281289 atau email melalui www.mediora.id atau Mediora@gmail.com
        </div>
    </details>

    <details class="pengiriman-item">
        <summary class="pengiriman-question">Apa yang harus saya lakukan jika setelah melakukan konfirmasi pesanan 
            sudah diterima status pesanan masih belum selesai?  </summary>
        <div class="pengiriman-answer">
        Jika konfirmasi pesanan diterima sudah dilakukan, tapi status pesanan belum selesai, Anda dapat menghubungi melalui Mediora@gmail.com
        </div>
    </details>

    <details class="pengiriman-item">
        <summary class="pengiriman-question">Apa yang dapat saya lakukan jika tidak bisa menghubungi nomor apotek?  </summary>
        <div class="pengiriman-answer">
        Jika nomor apotek tidak dapat dihubungi, Anda dapat menghubungi  Melalui Mediora@gmail.com
        </div>
    </details>

    <details class="pengiriman-item">
        <summary class="pengiriman-question">Mengapa pesanan tidak bisa dikirimkan/alamat tidak ditemukan?  </summary>
        <div class="pengiriman-answer">
        Pesanan yang tidak bisa dikirimkan atau alamt tidak ditemukan dapat dikarenakan lokasi anda diluar jangkauan mediora. Anda dapat memberikan saran keepada kami untuk menjual produk di daerah Anda kepada admin melalui Admed@gmail.com
        </div>
    </details>
</div>



        <h3>Pilih topik sesuai pertanyaan anda</h3>


<div class="topics">
    <div class="topic-container">
        <div class="topic">
            <img src="../image/logo.png" alt="Website">
        </div>
        <div class="topic-label">Website</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="../image/keranjang.png" alt="Pemesanan">
        </div>
        <div class="topic-label">Pemesanan</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="../image/pengiriman.png" alt="Pengiriman">
        </div>
        <div class="topic-label">Pengiriman</div>
    </div>
</div>


<div class="topics">
    <div class="topic-container">
        <div class="topic">
            <img src="../image/pembayaran.png" alt="Pembayaran">
        </div>
        <div class="topic-label">Pembayaran</div>
    </div>
    <div class="topic-container">
        <div class="topic">
            <img src="../image/retur.png" alt="Retur">
        </div>
        <div class="topic-label">Retur</div>
    </div>
</div>


</div>
    </div>
</body>
</html>
