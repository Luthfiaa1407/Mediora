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

        header a {
            text-decoration: none;
            color: #000;
        }

        header a img {
            width: 17px;
            height: 17px;
            margin-left: 25px;
        }

        header img {
            width: 85px;
            height: 50px;
            margin-left: auto;
        }

        body {
            font-family: Arial, sans-serif;
            background-image: url('../image/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: scroll;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 30px;
            text-align: center;
            margin-top: 80px;
        }

        .right-section {
            width: 600px;
            margin-left: auto;
            margin-right: 200px;
            text-align: center;
        }

        .faq-box {
            background-image: url('../image/faq box.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            border-radius: 20px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto 40px auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .faq-item {
            margin-bottom: 20px;
            border: none;
        }

        .faq-question {
            padding: 15px;
            padding-right: 40px; 
            background-color: #ffffff;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            list-style: none;
            text-align: left;
            position: relative;
            user-select: none;
        }


        .faq-question::after {
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

        details[open] .faq-question::after {
            transform: translateY(-50%) rotate(360deg);
            border-top: none;
            border-bottom: 8px solid #000;
        }

        .faq-answer {
            background-color: #ffffff;
            margin-top: 10px;
            padding: 15px;
            border-radius: 10px;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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
        }

        .topic-container a {
            color: black;
            text-decoration: none;
        }

        .topic {
            background-color: #F1F9FB;
            border-radius: 45%;
            padding: 15px;
            width: 136px;
            height: 80px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
       <a href="../../Login/landingpage2.php">
        <img src="../image/panah.png" alt="panah"> Pertanyaan Umum
       </a>
        <img src="../image/logo.png" alt="logo">

    </header>

    <div class="container">
        <div class="right-section">
            <h2>Pembayaran</h2>

            <div class="faq-box">
                <details class="faq-item">
                    <summary class="faq-question">Apa saja metode pembayaran yang diterima oleh mediora ?</summary>
                    <div class="faq-answer">
                        Mediora menyediakan pembayaran digital melalui e-wallet (OVO, Dana, LinkAja, ShopeePay, Gopay), transfer bank (BCA, BRI, BSI, BNI), dan verifikasi OTP, tanpa opsi COD atau kartu kredit, dengan semua transaksi harus diselesaikan secara digital sebelum pengiriman obat.                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">Apakah saya bisa mengganti metode pembayaran 
                    setelah memilih metode pembayaran ?</summary>
                    <div class="faq-answer">
                        Saat ini Anda dapat mengubah metode pembayaran sebelum menyelesaikan pembayaran. Namun jika pembayaran sudah dilakukan, metode tidak dapat diubah lagi - Anda perlu membuat pesanan baru dengan metode pembayaran yang diinginkan.                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-question">Bagaimana saya tahu jika pembayaran saya berhasil ? </summary>
                    <div class="faq-answer">
                        Setelah Anda menyelesaikan pembayaran, sistem akan menampilkan notifikasi 'Pembayaran Berhasil'. Apabila pembayaran gagal, sistem juga akan menampilkan pemberitahuan 'Pembayaran Gagal'.                    </div>
                </details>
            </div>

             <h3>Pilih topik sesuai pertanyaan anda</h3>

            <div class="topics">
                <div class="topic-container">
                    <a href="faq.php">
                        <div class="topic">
                            <img src="../image/logo.png" alt="Website">
                        </div>
                        <div class="topic-label">Website</div>
                    </a>
                </div>
                <div class="topic-container">
                    <a href="Pemesanan.php">
                        <div class="topic">
                            <img src="../image/keranjang.png" alt="Pemesanan">
                        </div>
                        <div class="topic-label">Pemesanan</div>
                    </a>
                </div>
            </div>

            <!-- Container baru khusus Pengiriman dan Pembayaran supaya sejajar -->
            <div class="topics" style="justify-content: center; gap: 80px;">
                <div class="topic-container">
                    <a href="pengiriman.php">
                        <div class="topic">
                            <img src="../image/pengiriman.png" alt="Pengiriman">
                        </div>
                        <div class="topic-label">Pengiriman</div>
                    </a>
                </div>
                <div class="topic-container">
                    <a href="Pembayaran.php">
                        <div class="topic">
                            <img src="../image/pembayaran.png" alt="Pembayaran">
                        </div>
                        <div class="topic-label">Pembayaran</div>
                    </a>
                </div>
            </div>
</body>
</html>
